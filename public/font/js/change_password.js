function togglePassword1(inputId) {
    const passwordInput = document.getElementById('passworda');
    
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}
function togglePassword2(inputId){
    const passwordInput2 = document.getElementById('passwordb');
    if (passwordInput2.type === 'password') {
        passwordInput2.type = 'text';
    } else {
        passwordInput2.type = 'password';
    }
}

function togglePassword3(inputId){
    const passwordInput3 = document.getElementById('passwordc');
    if (passwordInput3.type === 'password') {
        passwordInput3.type = 'text';
    } else {
        passwordInput3.type = 'password';
    }
}

function changePassword() {
    const oldPassword = document.getElementById('passworda').value;
    const newPassword = document.getElementById('passwordb').value;
    const confirmPassword = document.getElementById('passwordc').value;

    if (newPassword === confirmPassword) {
        alert('Thay đổi mật khẩu thành công!\nMật khẩu mới: ' + newPassword);
    } else {
        alert('Xác nhận mật khẩu mới không khớp. Vui lòng thử lại.');
    }
}