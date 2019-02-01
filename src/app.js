//Progetto: php-boolpress

 console.log('test js');

 $(document).ready(function () {


   var slug = $('.post_detail').attr('data-slug');
   var url = '/php-boolpress/routes/commentsRoute.php?slug=' + slug;

   $.getJSON(url, showComments);


  //FUNCTIONS

  function showComments(comments){

        for (var i = 0; i < comments.length; i++) {

          var htmlTemplate = $('#post_template').html();
          var template = Handlebars.compile(htmlTemplate);

          var context = {
            commentName: comments[i].name,
            commentMail: comments[i].email,
            commentBody: comments[i].body
          }

          var html = template(context);

          $('.post_comments').append(html);

        }
  }

});
