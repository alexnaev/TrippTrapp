<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container py-5 px-5 mt-5">
        <h2 class="border-1 border-bottom border-dark">The Code for TrippTrapp.</h2>
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col-lg-8">
                <pre class="line-numbers"><code class="language-javascript">
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
                </code>
                </pre>
            </div>
            <div class="col-lg-4">
                <p>The code is structed in three functions.One function to start or control the app, one for logic and one to display the results.</p>
                <h5>Get Values</h5>
                <p>The start or controller function getValues fetches the two numbers given in UI and validates them (to make sure they are integers, not strings). The numbers are then passed on to the logic function, and the return data is stored in a variable (tableData). The data is then paassed on to the display or view function for layout and output to UI.</p>
                <h5>TrippTrapp</h5>
                <p>The logic function trippTrapp takes in two parameters (the values passed on by the controller function), and uses theese while running through a for loop 100 times. Each number from 1 to 100 is checked to see if it is a multiple of one or both of the given values from UI. If it`s a multiple of the trippValue (3 by default) "Tripp" is pushed into a return array, if it`s a multiple of the trappValue (5 by default) "Trapp" is pushed into the return array and if it`s a multiple of both "TrippTrappTresko" is pushed into the return array. If neither of the three cases are true the number itself is pushed into the return array. The array is then returned.</p>
                <h5>Display Data</h5>
                <p>The display or view function displayData takes in one parameter (the value returned by the logic function). It fetches the table body element and an HTML template element before looping through the tableData array (the parameter). In this for loop the template element is filled with the data taken in as the parameter, and appended as a child element to the table body element displaying the results in UI.</p>
            </div>
        </div>
    </div>
</main>
<script src="js/prism.js"></script>
<script>
    Prism.plugins.NormalizeWhitespace.setDefaults({
        'remove-trailing': true,
        'remove-indent': true,
        'left-trim': true,
        'right-trim': true
    })
</script>
<?php
require_once 'shared/footer.php';
?>