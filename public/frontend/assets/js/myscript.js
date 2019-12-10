const flashData = $('.flash-data').data('flashdata')

if (flashData){

    swal({
        title: 'data' ,
        text: 'good' + flashData,
        type: 'success' 
    })
}