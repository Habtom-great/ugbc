// script.js
let records = [];
let registrationNumber = 1001;

document.getElementById("record-form").addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const age = document.getElementById("age").value;
    const sex = document.getElementById("sex").value;
    const address = document.getElementById("address").value;
    const country = document.getElementById("country").value;
    const city = document.getElementById("city").value;
    const tel = document.getElementById("tel").value;
    const email = document.getElementById("email").value;
    const image = document.getElementById("image").files[0];
    const editIndex = document.getElementById("edit-index").value;

    const reader = new FileReader();
    reader.onload = function (e) {
        const imgSrc = e.target.result;

        if (editIndex == -1) {
            records.push({
                regNo: registrationNumber++,
                name,
                age,
                sex,
                address,
                country,
                city,
                tel,
                email,
                imgSrc,
            });
        } else {
            records[editIndex] = { ...records[editIndex], name, age, sex, address, country, city, tel, email, imgSrc };
        }

        records.sort((a, b) => a.name.localeCompare(b.name));
        document.getElementById("edit-index").value = -1;
        displayRecords();
    };
    reader.readAsDataURL(image);

    document.getElementById("record-form").reset();
});

function displayRecords() {
    const recordList = document.getElementById("record-list");
    recordList.innerHTML = "";

    records.forEach((record, index) => {
        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${record.regNo}</td>
            <td><img src="${record.imgSrc}" alt="Student Image"></td>
            <td>${record.name}</td>
            <td>${record.age}</td>
            <td>${record.sex}</td>
            <td>${record.address}</td>
            <td>${record.country}</td>
            <td>${record.city}</td>
            <td>${record.tel}</td>
            <td>${record.email}</td>
            <td><button onclick="editRecord(${index})"><i class="fa fa-edit"></i></button></td>
            <td><button onclick="deleteRecord(${index})"><i class="fa fa-trash"></i></button></td>
        `;
        recordList.appendChild(row);
    });
}

function editRecord(index) {
    const record = records[index];
    document.getElementById("name").value = record.name;
    document.getElementById("age").value = record.age;
    document.getElementById("sex").value = record.sex;
    document.getElementById("address").value = record.address;
    document.getElementById("country").value = record.country;
    document.getElementById("city").value = record.city;
    document.getElementById("tel").value = record.tel;
    document.getElementById("email").value = record.email;
    document.getElementById("edit-index").value = index;
}

function deleteRecord(index) {
    records.splice(index, 1);
    displayRecords();
}
