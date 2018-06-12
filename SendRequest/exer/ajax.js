! function() {
    let ajax = {
        xhr: new XMLHttpRequestUpload(), //ajax实例化对象
        post(url, data, fn, type) {
            this.xhr.open('POST', url, true); //用post方式打开
            this.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            this.xhr.send(data); //发送数据
            this.getStatus(fn, type);
        },

        getStatus(fn, type) {
            this.xhr.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200 && type == 'json') {
                        fn(JSON.parse(this.response));
                    }
                }
            }
        },

        formatData(data) {
            var str = "";
            for (var o in data) {

                str += o + '=' + data[o] + '&';
            }


            str += str.replace('/\&$/', '');
            return str;
        }
    };
    window.ajax = ajax;
}();