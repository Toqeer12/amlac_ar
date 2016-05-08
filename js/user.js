// JavaScript Document
   function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "delete_job.php";
document.frmUser.submit();
}
}