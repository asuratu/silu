@extends('home.layouts.app')

@section('title', ' - 课程详情')

@section('content')
    <div class="page-index">4</div>
    <div class="ny-banner">
        <img src="">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <a href="{{ route('courses') }}">行知丝路研究院</a>
            <img src="../images/jt.png">
            <span>华商领袖重构商业</span>
        </div>
    </div>
    <div class="college">
        <div class="wrapper clearfix">
            @include('home.layouts._nav2')
            <div class="college-con">
                <div class="course5">
                    <div class="course5-con01">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>企业家的思想变革是企业创新的源动力！</h2>
                                <img src="/images/titbg.png">
                            </div>
                            <p>根据美国管理协会研究表明：全球企业的新商业模式开发投入再创新总投资中占比不到10%，美国企业创新成功有60%是商业模式创新。本课程从领导力、战略与品牌、执行力和商业模式等方面，为企业家提供系统的理论知识和实践案例。</p>
                        </div>
                    </div>
                    <div class="course-con04">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>课程设置</h2>
                                <img src="../images/titbg.png">
                            </div>
                            <table>
                                <tr>
                                    <td>模块一</td>
                                    <td>全球领导力</td>
                                </tr>
                                <tr>
                                    <td>模块二</td>
                                    <td>战略与品牌</td>
                                </tr>
                                <tr>
                                    <td>模块三</td>
                                    <td>新时代执行力</td>
                                </tr>
                                <tr>
                                    <td>模块四</td>
                                    <td>重构商业模式</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="course-con05">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>咨询与福利</h2>
                                <img src="/images/titbg.png">
                            </div>
                            <ul class="fontp clearfix">
                                <li>
                                    <h3>计划为学员企业提供包括以下方面的咨询服务：</h3>
                                    <p>
                                        <font>◢ </font> 海外投资项目可行性研究分析
                                        <br>
                                        <font>◢ </font> 大健康辅导（国医、佛医、道医、西医）
                                        <br>
                                        <font>◢ </font> 投融资咨询
                                        <br>
                                        <font>◢ </font> 挖掘与跨国央企的合作机会
                                        <br>
                                        <font>◢ </font> 专项国家政策指引及指导
                                        <br>
                                        <font>◢ </font> IPO上市咨询
                                        <br>
                                        <font>◢ </font> 沿线国家实地调研安排<br>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="course-con06">
        <div class="wrapper">
            <h2>四所顶尖高校校友资源</h2>
            <hr>
            <ul class="clearfix">
                <li>
                    <img src="../images/icon19.jpg">
                    <h3>上海交通大学</h3>
                </li>
                <li>
                    <img src="../images/icon20.jpg">
                    <h3>中国人民大学</h3>
                </li>
                <li>
                    <img src="../images/icon18.png">
                    <h3>北京中医药大学</h3>
                </li>
                <li>
                    <img src="../images/icon21.jpg">
                    <h3>北京外国语大学</h3>
                </li>
            </ul>
        </div>
    </div>
    <a href="{{ route('signs') }}" class="ljbm"><img src="../images/ljbm.png"></a>
@endsection

