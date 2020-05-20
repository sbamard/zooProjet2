
//script de recherche

$(document).ready(function () {
    $('#searchBar').keyup(function () {
        $('#result-search').html('');
        let intervenant = $(this).val();
        if (intervenant !== "") {
            $.ajax({
                type: 'GET',
                url: 'mod_recherche/rechercheIntervenant.php',
                data: 'user=' + encodeURI(intervenant),
                success: function (data) {
                    if (data !== "") {
                        $('#result-search').append(data);
                    } else {
                        document.getElementById('result-search').innerHTML = "<p>Aucun intervenant</p>";
                    }
                }
            });
        }
    });
});