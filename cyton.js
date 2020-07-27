
function onNextClick(){
    let pageNo = document.getElementById('pageNo');
    pageNo.value = $count + 1;
    

}

$count = 1;

let nextBtn = document.getElementById("nextBtn");
nextBtn.addEventListener('click',onNextClick)
nextBtn.inn