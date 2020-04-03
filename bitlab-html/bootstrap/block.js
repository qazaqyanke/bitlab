let news =
[
      {
            content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
            author:"Julius Caeser"
      },
      {
            content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
            author:"Julius Caeser"
      },
      {
            content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
            author:"Julius Caeser"
      },
      {
            content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
            author:"Julius Caeser"
      },
      {
            content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
            author:"Julius Caeser"
      },
      {
            content:"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
            author:"Julius Caeser"
      },
];


      // function clicked()
      // {
      //       let result  = '';
      //       for(let i = 0; i < news.length; i++){
      //             result += 'h1' + news[i] [0] + '</h1> <br>';
      //             result += news[i][1] + '<br><br>'
      //       }
      //      document.getElementById('div').innerHTML = result; 
      // }
      // tab = 1;
      function updateNews(){
            if(tab<=3){
                  html = "";
                  for(i=0; i<tab*3; i++){
                        html+='<hp>'+news[i]['content']+"</p>"
                        html+='<b>'+news[i]['author']+"</b><br>"
                  }
                  document.getElementById("div").innerHTML = html;
                  tab++;
            }
      }