function search(name) {
  fetch('http://localhost/app/src/api/search.php', {
    method: 'POST',
    body: new URLSearchParams('name=' + name)
  }).then(function (res) {
    return res.json();
  }).then(function (data) {
    populateTable(data);
  }).catch(function (error) {
    console.log(error);
  })
}

function populateTable(data) {
  table = document.querySelector(".data-table");

  table.innerHTML = "";

  for (let i = 0; i < data.length; i++) {
    const trDataContainer = document.createElement("tr");
    table.appendChild(trDataContainer);

    let newId = document.createElement("td");
    newId.innerHTML = data[i]["id"];
    trDataContainer.appendChild(newId);

    let newName = document.createElement("td");
    newName.innerHTML = data[i]["name"];
    trDataContainer.appendChild(newName);
  }
}