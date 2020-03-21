document.querySelector('#send_message').addEventListener('click',function(){
  var message = document.querySelector('#mensaje').value;
  var number = document.querySelector('#number').value;
  var url = "whatsapp://send?text="+encodeURIComponent(message)+"&phone="+encodeURIComponent(number)
  window.open(url);
});
