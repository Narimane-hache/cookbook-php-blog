var div = document.getElementById('text');
var str = div.textContent, interval = 500;
function repeat(){
  for (let i=0; i<str.length; i++) {
    div.innerHTML=str;
    setTimeout(function(){
      var letters = str.split('');
      letters.splice(i,1,'<span style="color:red">'+letters[i]+'</span>')
      div.innerHTML=letters.join('');
    },i*interval);
  }
}
repeat();
setInterval(repeat, str.length*interval);