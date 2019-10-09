@extends('home.layouts.app')

@section('title', ' - 课程详情')

@section('content')
    <div class="page-index">3</div>
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
            <span>新时代总裁班</span>
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
                                <h2>高瞻远瞩，强效执行，时代前沿，引领变革！</h2>
                                <img src="/images/titbg.png">
                            </div>
                            <p>
                                走进新时代，技术、市场、整体经济局势、外部环境和企业本身等方面都发生着巨大的变化，这就需要管理者应时代变化做出快速的改变。本课程在完善管理者的商业知识同时，全面系统提升管理者的思考能力、跨文化沟通能力，从产业、资本、文化、管理等方面系统解决企业家在新时代遇到的问题。
                                <br>
                                从命令控制式到授权赋能式管理，系统讲述新时代管理的基本逻辑。
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
                                    <td>布局全球经营</td>
                                </tr>
                                <tr>
                                    <td>模块二</td>
                                    <td>历史看管理：知古鉴今</td>
                                </tr>
                                <tr>
                                    <td>模块三</td>
                                    <td>“一带一路”实战模块</td>
                                </tr>
                                <tr>
                                    <td>模块四</td>
                                    <td>商业模式重构与科技创新</td>
                                </tr>
                                <tr>
                                    <td>模块五</td>
                                    <td>股权激励</td>
                                </tr>
                                <tr>
                                    <td>模块六</td>
                                    <td>领导艺术与资本力量</td>
                                </tr>
                                <tr>
                                    <td>模块七</td>
                                    <td>基业长青之道</td>
                                </tr>
                                <tr>
                                    <td>模块八</td>
                                    <td>世界五百强企业参访</td>
                                </tr>
                                <tr>
                                    <td>模块九</td>
                                    <td>重启创业新征程</td>
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

