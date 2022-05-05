var rew = document.querySelectorAll('.rew_block');
var rew2 = document.querySelectorAll('.slider_block');
let index2 = 0;
let index = 0;
var mass_slide2 = [0, 0];
var mass_slide = [0, 0, 0];
console.log(rew2)
$(document).ready(function(){
	rew[0].style.display = '';
	$(document).on('click', '.next', function () {
        if (index in mass_slide) {
            // father.removeChild(slide[0])
            // console.log(slide[0])
            rew[index].style.display = 'none';
            index++
            rew[index].style.display = '';
            console.log(mass_slide)
            console.log(index)
        }else{
            // console.log(slide[0])
            rew[index].style.display = '';
            index--

            index++
        }
    });
    $(document).on('click', '.back', function () {
        rew[index].style.display = 'none';
        index--
        if (index in mass_slide) {

            // father.removeChild(slide[0])
            // console.log(slide[0])
            rew[index].style.display = '';

        }else{

            index++
            console.log('index--')
            // father.removeChild(slide[0])
            // console.log(slide[0])
            rew[index].style.display = '';
        }
    })
    $(document).on('click', '.next_work', function () {
        console.log(23)
        if (index2 in mass_slide2) {
            // father.removeChild(slide[0])
            // console.log(slide[0])
            rew2[index2].style.display = 'none';
            index2++
            rew2[index2].style.display = '';
            console.log(mass_slide2)
            console.log(index2)
        }else{
            // console.log(slide[0])
            rew[index].style.display = '';
            index--

            index++
        }
    });
    $(document).on('click', '.back_work', function () {
        rew2[index2].style.display = 'none';
        index2--
        if (index2 in mass_slide2) {

            // father.removeChild(slide[0])
            // console.log(slide[0])
            rew2[index2].style.display = '';

        }else{

            index2++
            console.log('index--')
            // father.removeChild(slide[0])
            // console.log(slide[0])
            rew2[index2].style.display = '';
        }
    })
})