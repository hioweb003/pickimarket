$(document).ready(function() {
    // $("#openattachfile").click(function(){
    //     $("#file").trigger('click');
    //   });

    //   $("#file").change(function(){
    //     $(".filename").html('<span>Uploading '+this.files.length+' file(s)</span>');
    //     // for(i = 0; i < this.files.length; i++){
    //     //   $(".filename").append('<span>'+this.files[i].name+', </span>');
    //     // }
    //     let filedata = new FormData($(this)[0]);
    //     $.ajax({
    //       url:$("#mediaupload").attr('action'),
    //       method:'post',
    //       data:filedata,
    //       beforeSend:function(){
    //         $("#mdiaimg").show();
    //       },
    //       success:function(data){
    //         $("#mdiaimg").hide();
    //       },
    //       error:function(xhr,status,errorThrown){
    //         alert('Error... '+errorThrown);
    //       }
    //     });
    //   });

 //set and add image to product  from modal 
    $("#getimages").click(function(){
      let dtat = $("#getimages").attr('data-id');
      let checkbxs = $(".defaultChec");
      if(dtat === "set"){
        for(i = 0; i < checkbxs.length; i++){
         if(checkbxs[i].checked){
          $(".passimg").show();
          $(".pfeatured_image").val(checkbxs[i].value);
          $(".passimg").attr('src','/'+checkbxs[i].value);
          $(".adim").hide();
          $(".rmi").show();
          //alert(checkbxs[i].value);
         } 
        }
        $(".close").trigger('click');
      }else if(dtat === "add"){
        for(i = 0; i < checkbxs.length; i++){
          if(checkbxs[i].checked){
            let exp = new Date().getTime();  
            let recd = '<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12" id="codl'+exp+'">\
            <div id="conmt"><i class="fa fa-times-circle fa-3x text-danger rmv" style="cursor:pointer;" title="remove" id="rmimg'+exp+'"></i>\
            <img src="/'+checkbxs[i].value+'" id="rimg'+exp+'" class="my-2 img-thumbnail img-fluid"  width="80px" height="80px">\
             <input type="hidden" name="images[]" id="rminpt'+exp+'" value="'+checkbxs[i].value+'">\
            </div></div>';

            $('#gimg').append(recd);
          
            $(document).on("click","#rmimg"+exp, function(){
                $("#rimg"+exp).remove();
                $("#rminpt"+exp).remove();
                $("#codl"+exp).remove();
            });
          } 
         }
        $(".close").trigger('click');
      }
      
    });

    //add table row
    $("#add").click(function(){
      $("#shw").show();
     let exp = new Date().getTime();      
      let html = "<tr id='trow"+exp+"'><td><input type='text' required name='size[]' placeholder='size' class='form-control'></td>\
                    <td><input type='text' name='color[]' id='color' class='form-control' placeholder='30' required></td>\
                    <td><input type='number' name='quantity[]' id='quantity' class='form-control' placeholder='30' required'></td>\
                    <td><input type='number' name='regular_price[]' id='regular_price' class='form-control' placeholder='3000' required value=''></td>\
                    <td><input type='number' name='discount_price[]' id='discount_price' class='form-control' placeholder='3000' required value=''></td>\
                  <td><span class='btn btn-danger btn-sm' id='remove"+exp+"'>&times;</span></td></tr>";

     $("#tbod").append(html); 

    $("#remove"+exp).click(function(){
       $("#trow"+exp).remove();
   });
  });

  //delete images parmanently from modal
  $("#deleteimg").click(function(){
    $.ajax({
      url: $("#removeig").attr('action'),
      method:"post",
      data: $("#removeig").serialize(),
      beforeSend:function(){
        $(".mdiaimg").show();
        $("#deleteimg").attr('disabled',true);
      },
      success:function(data){
        if(data == '1'){
          $(".mdiaimg").hide();
          getuploadedimg();
          $("#deleteimg").attr('disabled',false);
        }  
      },
      error:function(xhr,status,errorThrown){
        alert('An Error Occured... '+errorThrown);
      }
    })
  });

  
});



window.onload = function() {
Dropzone.options.mydropzone = {
  addRemoveLinks: true,
  autoProcessQueue: false,
  acceptedFiles: ".png,.jpg,.jpeg",
 
  init:function(){
    let submitbutton = document.querySelector("#uploadfiles");
     myDropze = this;
    submitbutton.document.addEventListener('click', () => {
      myDropze.processQueue();
    });

    this.on("queuecomplete", function(){
       if(this.getQueuedFiles().length === 0 && this.getUploadingFiles().length === 0){
        this.removeAllFiles();
       }
       getuploadedimg();
    });
  },
  
};
};

function getuploadedimg(){
  $.ajax({
    url:"/hn-admin/fetch-uploaded-image",
    method:"get",
    beforeSend:function(){
      document.querySelector(".mdiaimg").style.display = 'block';
    },
    success:function(data){
        document.querySelector(".mdiaimg").style.display = 'none';
        $("#getimg").html(data);
    }
  })
}