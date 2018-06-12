! function() {

    let ajax = {
        xhr: new XMLHttpRequest(), //ajax对象
        post(url, data, fn, type) { //对象函数形式
            data = this.formatData(data);
            this.xhr.open('POST', url, true);
            this.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //设置请求头
            this.xhr.send(data);
            this.getStatus(fn, type); //获得状态有个回调函数

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
            var str = '';

            for (var o in data) { //循环
                str += o + '=' + data[o] + '&';
            }

            str = str.replace('/\&$/', ''); //使用正则替换

            return str;

        }

    }


    window.ajax = ajax; //全局
}();