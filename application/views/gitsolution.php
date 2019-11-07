<!DOCTYPE html>
<html>
<head>
  <title>TESTED</title>
  <style type="text/css">
  #rudr_instafeed{
  list-style:none  
  }
  #rudr_instafeed li{
    float:left;
    width:200px;
    height:200px;
    margin:10px
  }
  #rudr_instafeed li img{
    max-width:100%;
    max-height:100%;
  }
  </style>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<ul id="rudr_instafeed"></ul>
<script type="text/javascript">
var token = '1606819409.1677ed0.b8c8e8c97f8640ed851e9a6692e47727',
    num_photos = 30;
 
$.ajax({
    url: 'https://api.instagram.com/v1/users/self/media/recent',
    dataType: 'jsonp',
    type: 'GET',
    data: {access_token: token, count: num_photos},
    success: function(data){
        console.log(data);
        for( x in data.data ){
            $('ul').append('<li><button type="button" data-whatever="'+data.data[x].user.username+'" data-toggle="modal" data-target="#myModal"><img src="'+data.data[x].images.low_resolution.url+'"></button>'+data.data[x].tags[0]+'<br>'+data.data[x].tags[1]+'</li>');
        }
    },
    error: function(data){
        console.log(data);
    }
});
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text(recipient)
  modal.find('.modal-body p').val(recipient)
})
</script>
</body>
</html>