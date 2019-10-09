@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '在线报名' : $seos[0]->title )

@section('meta')
    <meta name="keywords" content="{{ $seos->isEmpty() ? '' : $seos[0]->keywords }}"/>
    <meta name="description" content="{{ $seos->isEmpty() ? '' : $seos[0]->description }}"/>
@endsection

@section('content')
    <div class="ny-banner">
        <img src="{{ '/uploads/'.$banner[0]->img }}">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <span>在线报名</span>
        </div>
    </div>
    <div class="sign">
        <div class="wrapper">
            <div class="sy-tit">
                <h2>在线报名</h2>
                <img src="../images/kec.png">
            </div>
            <div class="editor">
                <h3><font color="#ab1001">行知丝路研究院定位：</font></h3>
                <p>
                    ◆ 行知丝路研究院是国际创业领袖跟精英人才培养生态的重新构建者。目标成为世界一流亚洲顶尖商学院的典范。<br>
                    ◆ 为创业者设计最强实战、最快落地、最具实效的课程体系。实战课程占比70%，打造有家国情怀、国际视野、文化魂魄、政企联合、师生共同发展的国家战略大学。<br>
                    ◆ 行知丝路研究院将构建“1+U（大学）+G（研究所）+C（公司）”多元融合的合作教育平台，即以1所校本部为基础，集聚国内外知名高校优势学科教学资源，共享权威科研机构最新突破性研究成果，丰富成功企业实战化经营的实践教学功能，以不断创新的进取精神建设新时代国际化、专业性、研究型的“国家战略大学”。
                </p>
                <div class="course-p">
                    <p style="display:none;">
                        <br>
                        <b style="color:#000;">学制：</b>3年（2年课程；1年跟踪辅导）<br>
                        <b style="color:#000;">报名条件：</b>上市公司、集团公司及地方主要企业创业精英<br>
                        　　　　　创业5年以上、公司规模50人以上<br>
                        　　　　　提供上一年度完税证明<br>
                        　　　　　二封推荐信<br>
                        <b style="color:#000;">报名方式：</b>官网报名—资料提交—综合审查—入学录取
                    </p>
                    <p>
                        <br>
                        <b style="color:#000;">学制：</b>1年<br>
                        <b style="color:#000;">报名条件：</b>企业董事长、总经理<br>
                        　　　　　国学、国医爱好者<br>
                        <b style="color:#000;">报名方式：</b>官网报名—综合审查—入学录取
                    </p>
                </div>
                <dl class="clearfix">
                    @foreach($courses as $course)
                    <dd class="{{ $course->status == 0 ? 'jsz' : '' }}" data-id="{{ $course->id }}" data-name="{{ $course->name }}" data-sign-table="{{ $course->sign_table }}" data-letter="{{ $course->letter }}">
                        {{ $course->name }}
                        <a class="{{ $course->status == 0 ? 'jsz' : '' }}" href="javascript:;">立即报名<img src="../images/icon04.png" class="show"><img src="../images/icon05.png" class="hide"></a>
                    </dd>
                    @endforeach
                </dl>

            </div>
            @include('home.layouts._error')
            <div class="form">
                <form action="{{ route('signs.store') }}" method="post" enctype="multipart/form-data" id="sign-form">
                    {{ csrf_field() }}
                    <div class="table-div">
                        <table>
                            <tbody>
                            <tr>
                                <td class="td1">
                                   <img src="../images/people.png"/>
                                </td>
                                <td colspan="7">
                                    <input type="text" name="name" required value="{{ old('name') }}" placeholder="姓名">
                                </td>
                                <!--<td class="td1">
                                    性 别
                                </td>
                                <td colspan="3">
                                    <input type="text" name="sex" required value="{{ old('sex') }}">
                                </td>-->
                                {{--<td rowspan="4" class="td4">--}}
                                    {{--<a href="javascript:;" onclick="$('#file').click();">上传</a>个人证件照--}}
                                    {{--<input type="file" id="file" name="img">--}}
                                    {{--<input type="hidden" id="file_img" name="img">--}}
                                    {{--<!--证件照图片-->--}}
                                    {{--<img src="" style="display:none;">--}}
                                {{--</td>--}}
                            </tr>
                            {{--<tr>--}}
                                {{--<td class="td1">--}}
                                    {{--籍贯--}}
                                {{--</td>--}}
                                {{--<td colspan="2">--}}
                                    {{--<input type="text" name="birthplace" required value="{{ old('birthplace') }}">--}}
                                {{--</td>--}}
                                {{--<td class="td1">--}}
                                    {{--民族--}}
                                {{--</td>--}}
                                {{--<td colspan="3">--}}
                                    {{--<input type="text" name="ethnic" required value="{{ old('ethnic') }}">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <td class="td1">
                                   <img src="../images/qiye.png"/>
                                </td>
                                <td colspan="7">
                                    <input type="text" name="unit" required value="{{ old('unit') }}" placeholder="企业名称">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                         <img src="../images/tie.png"/>
                                </td>
                                <td colspan="7">
                                    <input type="text" name="main_position" required value="{{ old('main_position') }}" placeholder="职务">
                                </td>
                            </tr>
                            <tr>
                                <!--<td class="td1">
                                    身份证/护照号
                                </td>
                                <td colspan="7">
                                    <input type="text" name="id_card" required value="{{ old('id_card') }}">
                                </td>-->
                            </tr>
                            <tr>
                                <td class="td1">
                                   <img src="../images/phone.png"/>
                                </td>
                                <!--<td class="td1">
                                  
                                </td>-->
                                <td colspan="7">
                                    <input type="text" name="phone" required value="{{ old('phone') }}" placeholder="联系电话">
                                </td>
                                <!--<td class="td1">
                                    电子邮箱
                                </td>
                                <td colspan="2">
                                    <input type="text" name="email" required value="{{ old('email') }}">
                                </td>-->
                                {{--<td class="td1">--}}
                                    {{--通讯地址--}}
                                {{--</td>--}}
                                {{--<td colspan="6">--}}
                                    {{--<input type="text" name="address" required value="{{ old('address') }}">--}}
                                {{--</td>--}}
                            </tr>
                            {{--<tr>--}}

                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td1">--}}
                                    {{--<strong>个人简介</strong>--}}
                                    {{--<br>--}}
                                    {{--<small>（个人突出事迹与社会贡献）</small>--}}
                                {{--</td>--}}
                                {{--<td colspan="7">--}}
                                    {{--<textarea name="introduction" required>{{ old('introduction') }}</textarea>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td1">--}}
                                    {{--<strong>公司介绍</strong>--}}
                                    {{--<br>--}}
                                    {{--<small>（公司规模、成立时间、完税信息）</small>--}}
                                {{--</td>--}}
                                {{--<td colspan="7">--}}
                                    {{--<textarea name="company_intro" required>{{ old('company_intro') }}</textarea>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            </tbody>
                        </table>
                        <input type="hidden" name="course_id" value="">
                    </div>
                    {{--<div class="ts fontp">--}}
                        {{--<font color="#cb9530">温馨提示</font>——报名学习<span class="course-name"></span>，需要学员提供以下几项材料：<br>--}}
                        {{--<font color="#333333">1.最高学历毕业证书复印件</font><a href="javascript:;" onclick="$('#file1').click();">上传</a><br>--}}
                        {{--<font color="#333333">2.个人荣誉证书复印件</font><a href="javascript:;" onclick="$('#file2').click();">上传</a>--}}
                    {{--</div>--}}
                    {{--<div class="dl-div clearfix">--}}
                        {{--<dl class="clearfix dl1"></dl>--}}
                        {{--<dl class="clearfix dl2"></dl>--}}
                    {{--</div>--}}

                    {{--<div class="sign-div">--}}

                    {{--</div>--}}
                    {{--<div class="clearfix">--}}
                        {{--<dl class="dl3"></dl>--}}
                        {{--<dl class="dl4"></dl>--}}
                        {{--<dl class="dl5"></dl>--}}
                    {{--</div>--}}




                    <!--<div class="p course-p" style="margin-top:22px;">
                        请下载<a class="course-table" href="" download=""><span class="course-name"></span>报名表</a>{{--与<a class="course-letter" href="" download="">推荐信</a>--}}，填写好以后扫描上传，报名表<a href="javascript:;" onclick="$('#file3').click();">上传</a>，{{--推荐信<a href="javascript:;" onclick="$('#file4').click();">上传</a>，--}}身份证复印件<a href="javascript:;" onclick="$('#file5').click();">上传</a>-->
                        {{--<input type="file" name="file1" id="file1">--}}
                        {{--<input type="file" name="file2" id="file2">--}}
                        <input type="file" name="file3" id="file3">
                        <input type="file" name="file4" id="file4">
                        <input type="file" name="file5" id="file5">

                        {{--<input type="hidden" name="file1" id="file_1">--}}
                        {{--<input type="hidden" name="file2" id="file_2">--}}
                        <input type="hidden" name="file3" id="file_3">
                        <input type="hidden" name="file4" id="file_4">
                        <input type="hidden" name="file5" id="file_5">
                    </div>
                    <div class="dl-div clearfix">
                        <dl class="clearfix dl3"></dl>
                        <dl class="clearfix dl4"></dl>
                        <dl class="clearfix dl5"></dl>
                    </div>
                    <div class="btn">
                        <a href="javascript:;" class="reset">清除</a>
                        <input type="submit" value="发送">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            var course_id = '{{ @$_GET['id'] }}';
            $('.editor dd').each(function () {
                if($(this).attr('data-id') == course_id){
                    showForm($(this));
                }
            });
            //清除
            $('.reset').click(function () {
                $('.form dd').remove();
                $('.form input[type=text],.form textarea').val('');
                $('.form dl').html('');
                $('.td4 img').attr('src','').hide()
            });
            //报名表出现
            $('.editor dd').click(function () {
                if ($(this).hasClass('jsz'))
                    return;
                showForm($(this));
                $('.course-p p').eq($(this).index()).show().siblings().hide();

                var course_id = $(this).attr('data-id');
                // var name = $(this).attr('data-name');
                // var sign_table = $(this).attr('data-sign-table');
                // var letter = $(this).attr('data-letter');
                //
                $('input[name=course_id]').val(course_id);
                // $('.course-name').html(name);
                // $('.course-table').attr('href', sign_table);
                // $('.course-letter').attr('href', letter);
                //
                //
                // $(this).addClass('cur').siblings().removeClass('cur');
                // $('.sign .form').show();
            });
            //图片上传
            layui.use('upload', function(){
                var upload = layui.upload;

                //执行实例
                var uploadInst = upload.render({
                    elem: '#file', //绑定元素
                    url: '/fileUpload', //上传接口
                    done: function(res){
                        $('.td4 img').show().attr('src',res.data.src)
                        $('#file_img').val(res.data.src.substring(9, res.data.src.length));
                    }
                });
                //上传毕业证书复印件
                var uploadInst1 = upload.render({
                    elem: '#file1', //绑定元素
                    url: '/fileUpload', //上传接口
                    accept: 'file',
                    before: function(obj){
                        obj.preview(function(index, file, result){
                            if(file.type=='application/pdf'){
                                $('.dl1').html('<dd class="pos_re pdf">'+file.name+'</dd>')
                            }
                            else{
                                $('.dl1').html('<dd class="pos_re word">'+file.name+'</dd>')
                            }
                        });
                    },
                    done: function(res){
                        $('#file_1').val(res.data.src.substring(9, res.data.src.length));
                    }
                });
                //上传个人荣誉证书
                var uploadInst2 = upload.render({
                    elem: '#file2', //绑定元素
                    url: '/fileUpload', //上传接口
                    accept: 'file',
                    before: function(obj){
                        obj.preview(function(index, file, result){
                            console.log(file.type);
                            if(file.type=='application/pdf'){
                                $('.dl2').html('<dd class="pos_re pdf">'+file.name+'</dd>')
                            }
                            else{
                                $('.dl2').html('<dd class="pos_re word">'+file.name+'</dd>')
                            }
                        });
                    },
                    done: function(res){
                        $('#file_2').val(res.data.src.substring(9, res.data.src.length));
                    }
                });

                var uploadInst3 = upload.render({
                    elem: '#file3', //绑定元素
                    url: '/fileUpload', //上传接口
                    accept: 'file',
                    before: function(obj){
                        obj.preview(function(index, file, result){
                            console.log(file.type);
                            if(file.type=='application/pdf'){
                                $('.dl3').html('<dd class="pos_re pdf">'+file.name+'</dd>')
                            }
                            else{
                                $('.dl3').html('<dd class="pos_re word">'+file.name+'</dd>')
                            }
                        });
                    },
                    done: function(res){
                        $('#file_3').val(res.data.src.substring(9, res.data.src.length));
                    }
                });
                var uploadInst4 = upload.render({
                    elem: '#file4', //绑定元素
                    url: '/fileUpload', //上传接口
                    accept: 'file',
                    before: function(obj){
                        obj.preview(function(index, file, result){
                            console.log(file.type);
                            if(file.type=='application/pdf'){
                                $('.dl4').html('<dd class="pos_re pdf">'+file.name+'</dd>')
                            }
                            else{
                                $('.dl4').html('<dd class="pos_re word">'+file.name+'</dd>')
                            }
                        });
                    },
                    done: function(res){
                        $('#file_4').val(res.data.src.substring(9, res.data.src.length));
                    }
                });
                var uploadInst5 = upload.render({
                    elem: '#file5', //绑定元素
                    url: '/fileUpload', //上传接口
                    accept: 'file',
                    before: function(obj){
                        obj.preview(function(index, file, result){
                            console.log(file.type);
                            if(file.type=='application/pdf'){
                                $('.dl5').html('<dd class="pos_re pdf">'+file.name+'</dd>')
                            }
                            else{
                                $('.dl5').html('<dd class="pos_re word">'+file.name+'</dd>')
                            }
                        });
                    },
                    done: function(res){
                        $('#file_5').val(res.data.src.substring(9, res.data.src.length));
                    }
                });
            });


        });

        function showForm(obj) {
            //$('.course-p').hide();
            $('.sign-div').html('');

            var course_id = obj.attr('data-id');
            var name = obj.attr('data-name');
            var sign_table = obj.attr('data-sign-table');
            var letter = obj.attr('data-letter');

            if (sign_table){
                //$('.sign-div').append($('.course-p').clone().show());

            }
            $('input[name=course_id]').val(course_id);
            $('.course-name').html(name);
            $('.course-table').attr('href', '/uploads/'+sign_table);
            //$('.course-letter').attr('href', letter);


            obj.addClass('cur').siblings().removeClass('cur');
            $('.sign .form').show();
        }
    </script>
@endsection