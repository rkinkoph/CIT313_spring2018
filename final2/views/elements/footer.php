   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo BASE_URL?>views/js/jquery.js"></script>
    <script src="<?php echo BASE_URL?>views/js/bootstrap.min.js"></script>
   <?php
   if($u->isAdmin()) {
       ?>
   <script src="<?php echo BASE_URL?>application/plugins/tinyeditor/tiny.editor.packed.js"></script>
   <script>
       var editor = new TINY.editor.edit('editor', {
           id: 'tinyeditor',
           width: 584,
           height: 175,
           cssclass: 'tinyeditor',
           controlclass: 'tinyeditor-control',
           rowclass: 'tinyeditor-header',
           dividerclass: 'tinyeditor-divider',
           controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
               'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
               'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
               'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|'],
           footer: true,
           fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
           xhtml: true,
           cssfile: 'custom.css',
           bodyid: 'editor',
           footerclass: 'tinyeditor-footer',
           toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
           resize: {cssclass: 'resize'}
       });


   </script>



<?php   }




   ?>

   <script>
      $(document).ready(function(){
          $('.post-loader').click(function(event){

            event.preventDefault();
            var el = $(this);

            $.ajax({
              url:el.attr('href'),
              type:'GET',
              success:function(data) {
                el.parent().append(data);
                el.remove();
              }
            });

          });


      });



   </script>

   <script> src="js/jquery-2.0.3.min.js"</script>
   <script> src="js/bootstrap.min.js"</script>
   <script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
   	<script>
   		$.validator.setDefaults({
   			submitHandler: function(form) {

          form.submit();
   			}
   		});

   		$().ready(function() {
   			// validate signup form on keyup and submit
   			$("#registration_form").validate({
   				rules: {

            first_name: {
              required: true
            },
            last_name: {
              required: true
            },
            email: {
              required: true,
              email: true
            },

   					password: {
   						required: true

   					},
   					confirm: {
   						required: true,
   						equalTo: "#password"
   					},
   					},
   				messages: {
   					password: {
   						required: "Please provide a password",
   						minlength: "Your password must be at least 5 characters long"
   					},
   					confirm_password: {
   						required: "Please provide a password",
   						minlength: "Your password must be at least 5 characters long",
   						equalTo: "Please enter the same password as above"
   					}
   				}
   				});



   			});
   			</script>



  </body>
</html>
