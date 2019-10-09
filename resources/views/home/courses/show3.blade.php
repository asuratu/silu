@extends('home.layouts.app')

@section('title', ' - 课程详情')

@section('content')
    <div class="page-index">2</div>
    <div class="ny-banner">
        <img src="">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <a href="{{ route('courses') }}">课程介绍</a>
            <img src="../images/jt.png">
            <span>新时代女性学堂</span>
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
                                <h2>变革新时代，女性慧力量！</h2>
                                <img src="/images/titbg.png">
                            </div>
                            <p>
                                据统计，女性管理者在企业中只占到20%左右，而福布斯400中国富豪榜中女性富豪也只占到7%，全球权势女性榜100强中中国女性仅占五席。究竟是什么制约了女性的发展？<br>
                                在变革时代，不得不说女性已经成为商业发展的中坚力量。<br>
                                本课程专注“她力量”的塑造，助力女性企业家成长。<br>
                                提升女性生命的品质与幸福指数，进而创造一个富足并和谐有爱的幸福人生！

                            </p>
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
                                    <td>女性领导力</td>
                                </tr>
                                <tr>
                                    <td>模块二</td>
                                    <td>柔慧治天下</td>
                                </tr>
                                <tr>
                                    <td>模块三</td>
                                    <td>美育与健康</td>
                                </tr>
                                <tr>
                                    <td>模块四</td>
                                    <td>幸福的密码</td>
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

