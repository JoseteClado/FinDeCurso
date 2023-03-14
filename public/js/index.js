

let D = document.getElementById("D1"); // I gave "D1" as id to my div

    // this one is to calculate the scroll end Pixels
let Calc = D.scrollHeight - D.clientHeight;

function ScrollingInD1() {

    //this one is to calculate the scrolling percent while going through the <div> it can help for "Responsivity"
let percent = (D.scrollTop * 100) / Calc;

    if (D.scrollTop == Calc) {
        console.log("funciona porfa");
    }
}
function hacerScroll(){
    window.scroll(0,900); 
}

