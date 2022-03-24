//Start/controller function
function getValues() {
    let trippValue = document.querySelector('#trippValue').value;
    let trappValue = document.querySelector('#trappValue').value;

    //Validate input
    trippValue = parseInt(trippValue);
    trappValue = parseInt(trappValue);

    if (Number.isInteger(trippValue) && Number.isInteger(trappValue)) {
        let tableData = trippTrapp(trippValue, trappValue);
        displayData(tableData);
    } else {
        alert('Only integers are valid!');
    }

}

//Logic function
function trippTrapp(tripp, trapp) {
    let returnArray = [];

    for (let index = 1; index <= 100; index++) {

        if (index % tripp == 0 && index % trapp == 0) {
            returnArray.push('TrippTrappTresko');
        } else if (index % tripp == 0) {
            returnArray.push('Tripp');
        } else if (index % trapp == 0) {
            returnArray.push('Trapp');
        } else {
            returnArray.push(index);
        }
    }

    return returnArray;
}

//Display/view function
function displayData(tableData) {
    let tableBody = document.querySelector('#results');
    let templateRow = document.querySelector('#tableTemplate');

    tableBody.innerHTML = "";

    for (let i = 0; i < tableData.length; i += 5) {
        const tableRow = document.importNode(templateRow.content, true);
        let rowCols = tableRow.querySelectorAll('td');

        rowCols[0].classList.add(tableData[i]);
        rowCols[0].textContent = tableData[i];

        rowCols[1].classList.add(tableData[i + 1]);
        rowCols[1].textContent = tableData[i + 1];

        rowCols[2].classList.add(tableData[i + 2]);
        rowCols[2].textContent = tableData[i + 2];

        rowCols[3].classList.add(tableData[i + 3]);
        rowCols[3].textContent = tableData[i + 3];

        rowCols[4].classList.add(tableData[i + 4]);
        rowCols[4].textContent = tableData[i + 4];

        tableBody.appendChild(tableRow);
    }
}