function Iniciar() {
    var p_usuario = document.getElementById("usuario").value;
    var p_Password = document.getElementById("password").value;
    // Agrega más parámetros según sea necesario

    $.ajax({
        url: "../Cn/cn.php",
        type: "POST",
        data: { procedimiento: 'InicioSesion', Usuario: p_usuario, Password: p_Password },
        success: function(response) {
            //Si es una tabla que devuelva esto
            var data = JSON.parse(response);
            buildTable(data);
            window.location.href = 'Principal.html';
            //Si es un echo que devuelva
            //$("#resultado").html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function buildTable(data) {
    var table = "<table border='1'>";
    table += "<tr>";
    for (var header in data[0]) {
        table += "<th>" + header + "</th>";
    }
    table += "</tr>";
    data.forEach(function(row) {
        table += "<tr>";
        for (var field in row) {
            table += "<td>" + row[field] + "</td>";
        }
        table += "</tr>";
    });
    table += "</table>";
    $("#resultado").html(table);
}