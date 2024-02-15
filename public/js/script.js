

$(document).ready(function() {

    AOS.init({
        duration: 650,
        once: true
      });
    
    $('#logo').mouseenter(function (){
        console.log($('#logo').animate({
            
            opacity: '0.5',
            height: '150px',
            width: '150px'
          }))
          
    }
    )
    $('#logo').mouseout(function (){
        console.log($('#logo').animate({
            
            opacity: '1',
            height: '32px',
            width: '32px'
          }))
    }
    )

    

      let configuracao = {
        strings: ["o agro é pop",
        "o agro é tech",
        "o agro é tudo",
        " a indústria e a riqueza do Brasil"
        
    ],
        typeSpeed: 80,
        startDelay: 4000,
        backDelay: 500,
    }
    let typed = new Typed("#texto", configuracao);

})

