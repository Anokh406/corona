$('.newstudent').on('click', function (e) {
    // console.log('jksdjflk');
    $parentDiv = $(this).closest('div.viewStudents_data');
    var sName = $parentDiv.find('.sName').text(),
        fName = $parentDiv.find('.fName').text(),
        mName = $parentDiv.find('.mName').text(),
        mobile = $parentDiv.find('.mobile').text(),
        r_No = $parentDiv.find('.roll_no').text(),
        birth = $parentDiv.find('.dob').text(),
        gender = $parentDiv.find('.gender').text(),
        category = $parentDiv.find('.category').text(),
        caste = $parentDiv.find('.caste').text(),
        email = $parentDiv.find('.email').text(),
        addmision = $parentDiv.find('.admission_date').text(),
        address = $parentDiv.find('.address').text(),
        student_district = $parentDiv.find('.student_district_name').text(),
        aadharNo = $parentDiv.find('.aadhar_no').text(),
        familyId = $parentDiv.find('.ppp').text();
    vaccine = $parentDiv.find('#selectVaccine').text();
    $('#studentrejister').find('#sname').text(sName);
    $('#studentrejister').find('#fname').text(fName);
    $('#studentrejister').find('#mName').text(mName);
    $('#studentrejister').find('#email').text(email);
    $('#studentrejister').find('#mobile').text(mobile);
    $('#studentrejister').find('#roll_no').text(r_No);
    $('#studentrejister').find('#addmission').text(addmision);
    $('#studentrejister').find('#aadhar').text(aadharNo);
    $('#studentrejister').find('#ppp').text(familyId);
    $('#studentrejister').find('#selectVaccine').text(vaccine);
    $("#rejister").modal('show');
});
$('#close').on('click', function () {
    // alert("helo");
    // $('#rejister').modal('hide');
    // $('#covid_np').modal('hide');
    // $('#updateVaccineRecords').modal('hide');
    $('#MyPopup').modal('hide');
    $('#rejister').modal('hide');
});
$('#studentClose').on('click', function () {
    $('#rejister').modal("hide");
});
$('#close').on('click', function () {
    // alert("hi");
    $('#MyPopup').modal("hide");
    $('#updateVaccineRecords').modal("hide")
});
$('#close1').on('click', function () {
    // alert("hi");
    $('#covid_np').modal("hide");
});
