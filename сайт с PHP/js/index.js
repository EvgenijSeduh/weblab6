var selectOperation = document.getElementById('operation')
var resultButton = document.getElementById('calculate')
var elementNumA = document.getElementById("numA");
let elementNumB = document.getElementById("numB");
resultButton.addEventListener("click", function() {
  calculate(typeOperation);
});
var resultText = document.getElementById('result')
var typeOperation = '';


function showFields(selectElement) {
typeOperation = selectElement.value;
resultText.textContent = 'Результат:'
console.log(typeOperation)
  var values = document.getElementById("values");
  resultText.style.display = "block"
  if (selectElement.value != "") {
    values.style.display = "block";
    elementNumA.style.display = "block";
    if (selectElement.value == "row" || selectElement.value == "gcd") {
      elementNumB.style.display = "block";
    }
    else{
      elementNumB.style.display = "none";
    }
  } else {
    values.style.display = "none";
  }
}

function calculate(a){
  console.log(typeOperation)
  if(a == 'row'){
      resultText.textContent = 'Результат:' + row(elementNumA.value,elementNumB.value)
  }
  if(a == 'gcd'){
    resultText.textContent = 'Результат:' + gcd(elementNumA.value,elementNumB.value)
  }
  if(a == 'minDigit'){
    resultText.textContent = 'Результат:' + minDigit(elementNumA.value)
  }
  if(a == 'pluralization'){
    resultText.textContent = 'Результат:' + pluralization(elementNumA.value)
  }
  if(a == 'fibb'){
    resultText.textContent = 'Результат:' + fibb(elementNumA.value)
  }
}
function row(a,b){
  if(b!=0)
    return a*row(a,b-1)
  else
    return 1
}

function gcd(m,n){
  while (m != 0 && n !=0){
        if (m > n)
            m %= n
        else
            n %= m
  }
    return Number(n)+Number(m)
  }

function minDigit(a){
  var min  = 10; 
  while(a!=0){
    if(a%10< min){
      min = a%10;
    }
    a=Math.floor(a/10)
  }
  return min
}

function pluralization(a){
  if(a == 1)
    return "В результате выполнения запроса была найдена "+ a + " запись"
    if(a > 1 && a<5)
    return "В результате выполнения запроса было найдено "+ a + " записи"
    if(a >=5)
    return "В результате выполнения запроса было найдено "+ a + " записей"
}

function fibb(a){
  if(a == 1)
  return 1;
else
return a*fibb(a-1)
}