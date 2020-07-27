
function onNextClick(){
    let pageNo = document.getElementById('pageNo');
    pageNo.innerHTML = $count + 1;
    

}

$count = 1;

let nextBtn = document.getElementById("nextBtn");
nextBtn.addEventListener('click',onNextClick)