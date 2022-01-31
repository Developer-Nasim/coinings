"use strict";
let findBlk_LuckyBox = document.querySelector('.the_game.luckybox')
function LuckyBox() { 
    let ClickValues = [5,8,6,10,7]; 
    let all_btn = document.querySelectorAll('.all_the_lucky_boxes .single_lucky_box')
    if (all_btn) { 
        all_btn.forEach(btn => {
            btn.addEventListener('click', () => {
                let makeIndex = Math.floor(Math.random() * 5);
                // set coin 
                sessionStorage.setItem('you_got',makeIndex);
                all_btn.forEach(elm => { 
                    elm.classList.remove('failed')
                    elm.classList.remove('success')
                })
                if (0 > ClickValues[makeIndex]) {
                    btn.classList.add('failed')
                }else{ 
                    btn.classList.add('success')
                }

                let body = document.querySelector('body');
                body.classList.add('show_ad')
    
                
            })
        });
    } 
}
if (findBlk_LuckyBox) {
    LuckyBox()
}