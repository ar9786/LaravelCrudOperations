$('.bootstrap-switch').each(function(){
    $this = $(this);
    data_on_label = $this.data('on-label') || '';
    data_off_label = $this.data('off-label') || '';

    $this.bootstrapSwitch({
        onText: data_on_label,
        offText: data_off_label
    });
});