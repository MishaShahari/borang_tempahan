// validation.js

function validateProgram(program) {
    return (program.trim() === "") ? "Program field is required.<br>\n" : "";
}

function validateTarikhpinjam(tarikhpinjam) {
    return (tarikhpinjam.trim() === "") ? "Tarikh Pinjam field is required.<br>\n" : "";
}

function validateTarikhpulang(tarikhpulang) {
    return (tarikhpulang.trim() === "") ? "Tarikh Pulang field is required.<br>\n" : "";
}

function validateMasa(masa) {
    return (masa.trim() === "") ? "Masa field is required.<br>\n" : "";
}

function validatePenganjur(penganjur) {
    return (penganjur.trim() === "") ? "Penganjur field is required.<br>\n" : "";
}

function validateJumlah(jumlah) {
    return (jumlah.trim() === "") ? "Jumlah Peserta field is required.<br>\n" : "";
}

function validateNamapemohon(namapemohon) {
    return (namapemohon.trim() === "") ? "Nama Pemohon field is required.<br>\n" : "";
}

function validateNopelajar(nopelajar) {
    return (nopelajar.trim() === "") ? "No. Pekerja/No. Pelajar field is required.<br>\n" : "";
}

function validateJawatanpemohon(jawatanpemohon) {
    return (jawatanpemohon.trim() === "") ? "Jawatan Pemohon field is required.<br>\n" : "";
}

function validateBahagianpemohon(bahagianpemohon) {
    return (bahagianpemohon.trim() === "") ? "Bahagian Pemohon field is required.<br>\n" : "";
}

function validatePhoneType(phone, phoneType, fieldName) {
    if (phoneType === "Bimbit" && !/^\d{10}$/.test(phone)) {
        return `${fieldName} field is required and must be a valid mobile number.<br>\n`;
    } else if (phoneType === "Pejabat" && !/^\d{10,}$/.test(phone)) {
        return `${fieldName} field is required and must be a valid office number.<br>\n`;
    } else if (!phoneType) {
        return `Please select a phone type for ${fieldName}.<br>\n`;
    }
    return "";
}

// Add other validation functions as needed

function validate(form) {
    let fail = "";
    fail += validateProgram(form.program.value);
    fail += validateTarikhpinjam(form.tarikhpinjam.value);
    fail += validateTarikhpulang(form.tarikhpulang.value);
    fail += validateMasa(form.masa.value);
    fail += validatePenganjur(form.penganjur.value);
    fail += validateJumlah(form.jumlah.value);
    fail += validateNamapemohon(form.namapemohon.value);
    fail += validateNopelajar(form.nopelajar.value);
    fail += validateJawatanpemohon(form.jawatanpemohon.value);
    fail += validateBahagianpemohon(form.bahagianpemohon.value);
    fail += validatePhoneType(form.phonepemohon.value, form.phonetypepemohon.value, "Phone Pemohon");
    // Add other form field validations

    if (fail === "") {
        document.getElementById('disp').innerHTML = "";
        return true;
    } else {
        document.getElementById('disp').innerHTML = fail;
        return false;
    }
}

function validateDateRange() {
    // Add code to validate date range if needed
    return true; // Change this based on your validation logic
}

// Other utility functions or event listeners can be added as needed
