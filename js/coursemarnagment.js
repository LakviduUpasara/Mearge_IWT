const createCourseBtn = document.getElementById("create-course-btn");
const updateCourseBtn = document.getElementById("Update-course-btn");
const deleteCourseBtn = document.getElementById("delete-course-btn");

createCourseBtn.addEventListener("click", showCreateCourseForm);
updateCourseBtn.addEventListener("click", showUpdateCourseForm);
deleteCourseBtn.addEventListener("click", showDeleteCourseForm);

function showCreateCourseForm() {
    document.getElementById("create-course").style.display = "block";
    document.getElementById("delete-course").style.display = "none";
    document.getElementById("Update-course").style.display = "none";
  }
  
  function showUpdateCourseForm() {
    document.getElementById("create-course").style.display = "none";
    document.getElementById("delete-course").style.display = "none";
    document.getElementById("Update-course").style.display = "block";
  }
  
  function showDeleteCourseForm() {
    document.getElementById("create-course").style.display = "none";
    document.getElementById("delete-course").style.display = "block";
    document.getElementById("Update-course").style.display = "none";
  }