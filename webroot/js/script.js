// $(document).ready(function () {
//     $("#form").validate({
//         // in 'rules' user have to specify all the constraints for respective fields
//         rules: {
//             image: "required",
//             name: {
//                 required: true,
//                 minlength: 3
//             },
//             email: {
//                 required: true,
//                 email: true
//             },
//             password: {
//                 required: true,
//                 minlength: 5
//             },
//             confirm_password: {
//                 required: true,
//                 minlength: 5,
//                 equalTo: "#password" //for checking both passwords are same or not
//             },
//         },
//         // in 'messages' user have to specify message as per rules
//         messages: {
//             image: " Please select your file",
//             name: " Please enter your name",
//             email: {
//                 required: " Please enter a email",
//                 minlength: " Your email must consist of at least 2 characters"
//             },
//             password: {
//                 required: " Please enter a password",
//                 minlength: " Your password must be consist of at least 5 characters"
//             },
//             confirm_password: {
//                 required: " Please enter a password",
//                 minlength: " Your password must be consist of at least 5 characters",
//                 equalTo: " Please enter the same password as above"
//             },
//         },
//         submitHandler: function (form) {
//             var postdata = $("#form").serialize();
//             // var formData = new FormData();
//             // formData.append('image', $('#image')[0].files[0]);
//             // formData.append('name', $('#name').val());
//             // formData.append('email', $('#email').val());
//             // formData.append('password', $('#password').val());
//             // formData.append('confirm_password', $('#confirm_password').val());
//             // alert('response');
//             // console.log(formData);
//             // return false;
//             $.ajax({
//                 url: "/add",
//                 data: postdata,
//                 type: "JSON",
//                 method: "post",
//                 // processData: false, // tell jQuery not to process the data
//                 // contentType: false, // tell jQuery not to set contentType
//                 success: function (response) {
//                     alert(response);
//                     // data = JSON.parse(response);
//                     // $('#rahul').html('');
//                     // $('#rahul').append(data['message']);
//                 }
//             });
//         }
//     });
// });