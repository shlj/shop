@extends('layouts.main')
@section('title','登录')
@section('body')
    <div class="login">
        <input type="hidden" value="" id="tt" />
        <div class="login_header">
            <img src="{{asset('/images/login.png')}}" alt=""/>
        </div>
        <div class="login_content">
            <div class="con_In">
                <div class="con_L clearfix">
                    <div class="con_img">
                        <img src="{{asset('/images/loginImg2.png')}}" />
                    </div>
                </div>
                <div class="con_R">
                    <div class="logo_form">
                        <div class="m_top clearfix">
                            <p>欢迎登录</p>
                        </div>
                        <div class="login_ma" style="">
                            <div class="control-group" style="margin-top: 34px;">
                                <label class="laber-form"></label>
                                <div class="controls">
                                    <input type="text" maxlength="20" name="username" value="<?php echo empty($userinfo)?'':$userinfo['mobile'];?>" class="name" id="username" placeholder="请输入用户名" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group" style="margin-top: 16px;">
                                <label class="laber-form"></label>
                                <div class="controls">
                                    <input type="password" maxlength="20" name="userpower" value="<?php echo empty($userinfo)?'':str_pad("@",$userinfo['pwdlen'],"@");?>" class="mima" id="userpower" placeholder="请输入密码" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <!--<div class="control-tip">
                                <div class="controls">
                                    <p class="help-block"></p>
                                </div>
                            </div>-->
                        </div>
                        <div class="safe">
                            <div class="safe_con">
                                <div class="select">
                                    <?php
                                    if(empty($userinfo))
                                    {
                                    ?>
                                    <img id="isRemmber" data-val='0' src="{{asset('/images/no_selected.png')}}"  />
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <img id="isRemmber" data-val='1' src="{{asset('/images/selected.png')}}"  />
                                    <?php
                                    }
                                    ?>
                                </div>
								<span class="safeM">
                                    <label>记住密码</label>
                                </span>
                                <span class="safeT">公共场所不建议自动登录，以防账号丢失</span>
                            </div>
                        </div>
                        <div class="login_btn">
                            <a class="btn-img btn-entry" id="loginsubmit">登&nbsp;&nbsp;&nbsp;&nbsp;录</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop