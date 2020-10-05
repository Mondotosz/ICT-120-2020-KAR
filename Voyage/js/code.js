let controls = [
    {nav: document.getElementById("navPeople"), field: document.getElementById("divPeople")},
    {nav: document.getElementById("navTransport"), field: document.getElementById("divTransport")},
    {nav: document.getElementById("navLodging"), field: document.getElementById("divLodging")},
    {nav: document.getElementById("navActivities"), field: document.getElementById("divActivities")}
];

controls.forEach(control => {
    control.nav.addEventListener("click", (e) => {
        navSelected(e);
        showFields(e);
    })
})

function navSelected(e) {
    controls.forEach(control => {
        control.nav.classList.remove("nav-selected");
    })
    e.target.classList.add("nav-selected");
}

function showFields(e) {
    controls.forEach(control => {

        if (control.nav === e.target) {
            control.field.classList.remove("hidden");
        } else {
            control.field.classList.add("hidden");
        }
    })

}
