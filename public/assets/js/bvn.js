$("#verifyBVN").on("click", function (event) {

    event.preventDefault();

    let data = new FormData(this.form);
    let validationInfo = document.getElementById("validation-info");
    let download = document.getElementById("download");

    var preloader = $('.page-loading');

    function showLoader() {
        preloader.addClass('active').show();
    }

    function hideLoader() {
        preloader.removeClass('active');
        setTimeout(function () {
            preloader.hide();
        }, 1000);
    }

    $.ajax({
        type: "post",
        url: "/user/bvn-retrieve",
        dataType: "json",
        data,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function () {

            showLoader();
            $("#download").hide();

        },
        success: function (result) {
            $("#loader").hide();

            validationInfo.innerHTML = `
            <div class="border border-light">
   <div class="table-responsive">
      <table class="table">
         <thead >
            <tr>
               <th style="border: none ! important;" width="20%"></th>
               <th style="border: none ! important;"></th>
               <th style="border: none ! important;"></th>
               <th style="border: none ! important;"></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row" rowspan="9">
                  <img class="rounded" src="data:image/;base64, ${result.data.photo}" alt="User Image" style="width: 250px; height: 250px;">
               </th>
            </tr>
            <tr>
               <th scope="row" style="text-align:right; border: none ! important;">BVN</th>
               <td style="text-align:left" ><span id="bvnno" >${result.data.bvn}</span>
               </td>
            </tr>
            <tr>
               <th scope="row" style="text-align:right; border: none ! important;">FirstName</th>
               <td  style="text-align:left">${result.data.firstName}
               </td>
            </tr>
            <tr>
               <th scope="row" style="text-align:right; border: none ! important;">Surname</th>
               <td  style="text-align:left">${result.data.lastName}
               </td>
            </tr>
            <tr>
               <th scope="row" style="text-align:right; border: none ! important;">Middle Name</th>
               <td  style="text-align:left">${result.data.middleName}
               </td>
            </tr>
            <tr>
               <th scope="row" style="text-align:right; border: none ! important;">Phone No</th>
               <td  style="text-align:left">${result.data.phoneNumber}
               </td>
            </tr>
            <tr>
               <th scope="row" style="text-align:right; border: none ! important;">Gender</th>
               <td  style="text-align:left">${result.data.gender}
               </td>
            </tr>

         </tbody>
      </table>
   </div>
</div>
            `;
            $("#download").show();
        },
        error: function (data) {
            $("#loader").hide();
            $.each(data.responseJSON.errors, function (key, value) {
                $("#errorMsg").show();
                $("#message").html(value);
            });
            setTimeout(function () {
                $("#errorMsg").hide();
            }, 5000);
        },
    });
});

$("#freeSlip").on("click", function (event) {
    let getBVN = $("#bvnno").html();
    $.ajax({
        type: "get",
        url: "/user/standardBVN/" + getBVN,
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
        success: function (response) {
            if (response.view) {
                var newWindow = window.open("", "_blank");
                newWindow.document.write(response.view);
                newWindow.document.close();
            } else {
                console.error("No view content received");
            }
        },
        error: function (data) {
            $.each(data.responseJSON.errors, function (key, value) {
                $("#errorMsg2").show();
                $("#message2").html(value);
            });
            setTimeout(function () {
                $("#errorMsg2").hide();
            }, 5000);
        },
    });
});

$("#paidSlip").on("click", function (event) {
    let getBVN = $("#bvnno").html();
    $.ajax({
        type: "get",
        url: "/user/premiumBVN/" + getBVN,
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
        success: function (response) {
            if (response.view) {
                var newWindow = window.open("", "_blank");
                newWindow.document.write(response.view);
                newWindow.document.close();
            } else {
                console.error("No view content received");
            }
        },
        error: function (data) {
            $.each(data.responseJSON.errors, function (key, value) {
                $("#errorMsg2").show();
                $("#message2").html(value);
            });
            setTimeout(function () {
                $("#errorMsg2").hide();
            }, 5000);
        },
    });
});
