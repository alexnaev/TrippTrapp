<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container mt-5">
        <div class="row row-cols-1 rowcols-lg-2">
            <div class="col-lg-4 col border-end border-2">
                <h1>TrippTrapp: A Coding Project</h1>
                <h4 class="lead">
                    Let´s go TrippTrappTresko. A javascript coding exercise using loops. Write a short program that displays each number from 1 to 100. For each multiple of 3, display "Tripp" instead of the number. For each multiple of 5, display "Trapp" instead of the number. For numbers which are multiples of both 3 and 5, display "TrippTrappTresko" instead of the number.
                </h4>
                <h2 class="mt-5 border-bottom border-2">Instructions</h2>
                <p>Enter a starting value and an ending value. Press the button and the values will appear.</p>
            </div>
            <div class="col-lg-8 col">
                <div>
                    <h5>Enter Values</h5>
                    <form class="row gy-2 gx-3">
                        <div class="col">
                            <input type="number" id="trippValue" class="form-control" placeholder="Tripp Value" value="3" aria-label="Tripp Value">
                        </div>
                        <div class="col">
                            <input type="number" id="trappValue" class="form-control" placeholder="Trapp Value" value="5" aria-label="Trapp Value">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button id="btnSubmit" type="button" class="btn btn-secondary btn-lg">TrippTrapp</button>
                        </div>
                    </form>
                    <h2 class="border-bottom border-2 mt-5">Results</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <tbody id="results">
                                <!-- RESULTS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/site.js"></script>
<script>
    document.querySelector('#btnSubmit').addEventListener('click', getValues);
</script>
<?php
require_once 'shared/footer.php';
?>