<?php
/* 값이 존재하면 알랏창이 안뜨고 값이 없으면 알랏창이 뜨게 하는 코드 */
if(!isset($_POST['chk']) or $_POST['chk'] != 1){
    /* die("<script>
    alert('약관 등을 동의하시고 접근하시기 바랍니다.')
    self.location.href = './stipulation.php'
    </script>");
 */}

 include 'inc_header.php';
 ?>

<main class="w-50 mx-auto border rounded-5 p-5">
    <h1 class="text-center">회원가입</h1>
    <div class="d-flex gap-2 align-items-end">
        <div>
            <label for="exampleInputId1" class="form-label">아이디</label>
            <input type="text" class="form-control" id="exampleInputId1" placeholder="아이디를 입력해 주세요.">

        </div>
        <button class="btn btn-secondary">
            아이디 중복확인
        </button>
    </div>
    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="flex-grow-1">
            <label for="exampleInputpassword" class="form-label">비밀번호</label>
            <input type="password" class="form-control" id="exampleInputpassword" placeholder="비밀번호를 입력해 주세요.">
        </div>
        <div class="flex-grow-1">
            <label for="exampleInputpassword2" class="form-label">비밀번호 확인</label>
            <input type="password" class="form-control" id="exampleInputpassword2" placeholder="비밀번호를 입력해 주세요.">
        </div>
    </div>
    <div class="d-flex gap-2 align-items-end mt-3">
        <div class="flex-grow-1">
            <label for="exampleInputemail" class="form-label">이메일</label>
            <input type="text" class="form-control" id="exampleInputemail" placeholder="이메일을 입력해 주세요.">

        </div>
        <button class="btn btn-secondary">
        이메일 중복확인
        </button>
    </div>
    <div class="mt-3 d-flex align-items-end gap-3">
        <div>
            <label for="f_zipcode">우편번호</label>
            <input type="text" name="zipcode" id="zipcode" class="form-control" maxlength="5" minlength="5">
        </div>
        <button class="btn btn-secondary mt-3">우편번호 찾기</button>
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="flex-grow-1">
            <label for="exampleInputaddress" class="form-label">주소</label>
            <input type="text" class="form-control" id="exampleInputaddress" placeholder="주소를 입력해 주세요.">
        </div>
        <div class="flex-grow-1">
            <label for="exampleInputaddress2" class="form-label">상세주소</label>
            <input type="text" class="form-control" id="exampleInputaddress2" placeholder="상세주소를 입력해 주세요.">
        </div>
    </div>

    <div class="mt-3 d-flex gap-5">
        <div>
            <label for="f_photo" class="form-label">프로필 이미지</label>
            <input type="file" name="profile" class="form-control">
        </div>
        <img src="images/person.svg" alt="profile image" class="w-25">
    </div>

    <div class="mt-3 d-flex gap-2">
        <button class="btn btn-primary flex-grow-1">가입확인</button>
        <button class="btn btn-secondary flex-grow-1">가입취소</button>
    </div>

</main>

 <?php
 include 'inc_footer.php';
 ?>