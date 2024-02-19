function inputUpdate(a) {
  document.getElementById("ansInput").value += a;
}

function getResult() {
  var res = [];
  var answer;

  if (document.getElementById("ansInput").value.includes("+")) {
    res = document.getElementById("ansInput").value.split('+');
    return parseInt(res[0]) + parseInt(res[1]);
  }

  else if (document.getElementById("ansInput").value.includes("-")) {
    res = document.getElementById("ansInput").value.split('-');
    return parseInt(res[0]) - parseInt(res[1]);
  }

  else if (document.getElementById("ansInput").value.includes("/")) {
    res = document.getElementById("ansInput").value.split('/');
    return parseInt(res[0]) / parseInt(res[1]);
  }

  else {
    res = document.getElementById("ansInput").value.split('*');
    return answer = parseInt(res[0]) * parseInt(res[1]);
  }
}

function Calc() {
  var result = getResult()
  document.getElementById('ansInput').value = result;
}

function clearValues() {
  document.getElementById('ansInput').value = " ";
}