//import moment from 'moment';
import 'bootstrap/js/dist/collapse';
import './jInvertScroll/dist/js/jquery.jInvertScroll'

//  Meu script que estou fazendo como teste
(() => {   

    const arr_scroll = [];    

    var elem = $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
        {
            height: 1500,
            onScroll: function (percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                console.log(percent);
            }
        });

    window.addEventListener('resize', () => {
        if (this.innerWidth <= 768)
            elem.destroy();
        else
            elem.reinitialize();
    });

    const links_modais = document.querySelectorAll('a[data-modal]');

    document.querySelectorAll('.modal.active').forEach(element => element.classList.remove('active') );
    links_modais.forEach(element => {
        
        element.addEventListener('click', (e) => {
            e.preventDefault();
            document.body.style.overflow= 'hidden';
            document.querySelector(element.getAttribute('href')).classList.toggle('active')
        });
    })

})();