$('body').on('change','.sub_category',function(event) {
            
            var id = $(this).val();
            if(id != "" && id !== undefined){
              $.ajax({

                url : baseUrl+'/backend/category/get-subcategory',
                method : 'POST',
                data : { id : id},
                dataType : 'json',
                success : function(response)
                {

                    if(response.success){
                        var text = '';
                        text = "<option selected disabled>Select Sub Category</option>"
                        $(response.sub_category).each(function(index, el) {
                            text += "<option value='"+el.id+"'>"+el.category+"</option>";
                        });


                        var str = '<div class="form-group sub_category_parent"><label for="category">Sub Category</label><select class="form-control sub_category" name="category_id">'+text+'</select></div>';
                        $('.sub_categoory_wrapper').append(str);



                    }

                    else if(response.error){
                        // alert("ok");
                        $('.sub_categoory_wrapper').last('.sub_category_parent').remove();
                    }
                }

            });
          }else{
            $('.sub_categoory_wrapper').empty();
        }