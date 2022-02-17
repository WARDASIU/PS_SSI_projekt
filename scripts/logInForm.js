function logIn(){
    div.className = 'overlay';
    let i = 0;
    if (i === 0){
        document.getElementsByTagName('body')[0].appendChild(div);
        i++;
    }


    div.innerHTML =
        '<div class="container" style="margin-top: 300px">\n' +
        '    <div class="row">\n' +
        '\'<button onclick="bum()" class="closeButton"></button>\'' +
        '        <form method="post" style="margin: 0 auto">\n' +
        '            <div class="col-lg-12">\n' +
        '                <div class="form-group">\n' +
        '                    <div class="formReg">\n' +
        '                        <label for="inlineFormInput">Name</label>\n' +
        '                        <input name="nameLogin" type="text" class="form-control" id="inlineFormInput" placeholder="enter your name...">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '            <div class="col-lg-12">\n' +
        '                <div class="form-group">\n' +
        '                    <div class="formReg">\n' +
        '                        <label for="exampleInputPassword1">Password</label>\n' +
        '                        <input name="passLogin" type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password...">\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '            <button name="logInSubmit" type="submit" class="btn btn-primary">Submit</button>\n' +
        '        </form>\n' +
        '    </div>\n' +
        '</div>';
}
