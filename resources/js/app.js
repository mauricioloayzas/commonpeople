import './bootstrap';
import './slider.js';

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

$("#btn-open-form").click(function (){
    $("#modal-exercise").modal("show");
});
$(".close-form").click(function (){
    $("#modal-exercise").modal("hide");
});
