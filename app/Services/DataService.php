<?php
/**
 * User: mobilecoderz
 * Date: 07/01/2019
 * Time: 03:53 PM
 */

namespace App\Services;


use Illuminate\Http\Request;

class DataService
{

    public function getData(Request $data){

    	$request =  json_decode($data->getContent(), true);
    	if($request === null )
    	{
    		$request = $data->input();
    	}
    	return $request;

	}
	
    public function uploadMultiImageVideo(Request $request)
    {
        
		$data = $this->getData($request);
        // if($data['type'] == 'image'){
        //     $rules=['photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
        // }else if($data['type'] == 'video') {
        //     $rules=['video' =>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'];
        // }

        // $validator = Validator($data,$rules);
        if($request->hasFile('photos') || $request->hasFile('video'))
        {
            
            if($data['type'] == 'image')
            {
                $allowedfileExtension=['jpeg','jpg','png','gif','svg'];
                $files = $request->file('photos');

            }else if($data['type'] == 'video'){

                $allowedfileExtension=['mpeg','ogg','mp4','webm','3gp','mov','flv','avi','wmv'];
                $files = $request->file('video');
            }
            
            if($data['for'] == 'accessories')
            {
                $dir = 'Accessories';
            }else if($data['for'] == 'animals'){
                $dir = 'Animals';
            }

            $contents = array();
            foreach($files as $file)
            {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){

                    $UploadedFilename = $file->store($dir);
                    $contents[] = $UploadedFilename ;

                }else{

					$result['status'] = 400;
					if($data['type'] == 'image')
					{
						$result['message'] = 'Warning! Sorry Only Upload jpeg,jpg,png,gif,svg file.';
					}else{
						$result['message'] = 'Warning! Sorry Only Upload mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv file.';
					}

					$result['data'] = '';

					return $result;
                }    
			}
			$result['status'] = 200;
			$result['message'] = 'successfully uploaded.';
			$result['data'] = $contents;
			return $result;
                
        }

	}
	
}