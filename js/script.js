$(document).ready(function() {
    $("#hairApptForm").submit(function(evt) {
        var stylist = $("#idStylist").val();
        var service = $("#idService:checked").val();
        var total = 0;
        if (stylist == "Graduate"){
            if (service == "Hair Cut") {
                total = 10;
            } else if (service == "Colour") {
                total = 20;
            } else {
                total = 30;
            }
        } else if (stylist == "Top Stylist") {
            if (service == "Hair Cut") {
                total = 20;
            } else if (service == "Colour") {
                total = 30;
            } else {
                total = 40;
            }
        }
        
        else if (stylist == "Senior Stylist") {
            if (service == "Hair Cut") {
                total = 35;
            } else if (service == "Colour") {
                total = 50;
            } else {
                total = 70;
            }
        }
        
        $("#idCost").html("The total cost is $" + total);
        
        evt.preventDefault();
    })
})
