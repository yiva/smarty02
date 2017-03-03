<?php

class t_huizong_model{

	public $dept;      // 部门
	public $inputtime;
	public $dutyhead;  // 值班首长
	public $dutyer;    // 值班员
	
	public $onedaywork1;   // 一日工作开展情况
	public $onedaywork2;   // 一日工作开展情况
	public $onedaywork3;   // 一日工作开展情况
	public $onedaywork4;   // 一日工作开展情况
	public $onedaywork5;   // 一日工作开展情况
	public $onedayworkjdd;   // 一日工作开展情况
	public $onedayworkjql;   // 一日工作开展情况
	
	public $shangjiinforealize;  // 上级指示通知落实情况 
	public $headdownlian;  //首长机关下连情况
	public $persontestcheck;  //人员抽查情况
	public $s_name;
	
	public $dutyhead_t;  	// 值班首长
	public $dutyer_t;       // 值班员
	public $factnum_t;      // 总数实到人数
	public $shouldnum_t;    //总数应到人数
	public $gbfactnum_t; 	//干部实到人数
	public $gbshouldnum_t;  //干部应到人数
	public $gbholiday_t;    //干部休假
	public $gbout_t;        // 干部外出
	public $sgfactnum_t;    //士官实在人数
	public $sgshouldnum_t;  //士官应该人数
	public $sgholiday_t;    //士官休假
	public $sgout_t; 		//士官外出
	public $ywbfactnum_t;   //义务兵实在人数
	public $ywbshouldnum_t; //义务兵应在人数
	public $ywbholiday_t;   //义务兵休假
	public $ywbout_t;       //义务兵外出
	public $remark_t;       //备注
	
	
	public $dutyhead_1;  	// 值班首长
	public $dutyer_1;       // 值班员
	public $factnum_1;      // 总数实到人数
	public $shouldnum_1;    //总数应到人数
	public $gbfactnum_1; 	//干部实到人数
	public $gbshouldnum_1;  //干部应到人数
	public $gbholiday_1;    //干部休假
	public $gbout_1;        // 干部外出
	public $sgfactnum_1;    //士官实在人数
	public $sgshouldnum_1;  //士官应该人数
	public $sgholiday_1;    //士官休假
	public $sgout_1; 		//士官外出
	public $ywbfactnum_1;   //义务兵实在人数
	public $ywbshouldnum_1; //义务兵应在人数
	public $ywbholiday_1;   //义务兵休假
	public $ywbout_1;       //义务兵外出
	public $remark_1;       //备注
	
	public $dutyhead_2;  	// 值班首长
	public $dutyer_2;       // 值班员
	public $factnum_2;      // 总数实到人数
	public $shouldnum_2;    //总数应到人数
	public $gbfactnum_2; 	//干部实到人数
	public $gbshouldnum_2;  //干部应到人数
	public $gbholiday_2;    //干部休假
	public $gbout_2;        // 干部外出
	public $sgfactnum_2;    //士官实在人数
	public $sgshouldnum_2;  //士官应该人数
	public $sgholiday_2;    //士官休假
	public $sgout_2; 		//士官外出
	public $ywbfactnum_2;   //义务兵实在人数
	public $ywbshouldnum_2; //义务兵应在人数
	public $ywbholiday_2;   //义务兵休假
	public $ywbout_2;       //义务兵外出
	public $remark_2;       //备注
	
	public $dutyhead_3;  	// 值班首长
	public $dutyer_3;       // 值班员
	public $factnum_3;      // 总数实到人数
	public $shouldnum_3;    //总数应到人数
	public $gbfactnum_3; 	//干部实到人数
	public $gbshouldnum_3;  //干部应到人数
	public $gbholiday_3;    //干部休假
	public $gbout_3;        // 干部外出
	public $sgfactnum_3;    //士官实在人数
	public $sgshouldnum_3;  //士官应该人数
	public $sgholiday_3;    //士官休假
	public $sgout_3; 		//士官外出
	public $ywbfactnum_3;   //义务兵实在人数
	public $ywbshouldnum_3; //义务兵应在人数
	public $ywbholiday_3;   //义务兵休假
	public $ywbout_3;       //义务兵外出
	public $remark_3;       //备注
	
	public $dutyhead_4;  	// 值班首长
	public $dutyer_4;       // 值班员
	public $factnum_4;      // 总数实到人数
	public $shouldnum_4;    //总数应到人数
	public $gbfactnum_4; 	//干部实到人数
	public $gbshouldnum_4;  //干部应到人数
	public $gbholiday_4;    //干部休假
	public $gbout_4;        // 干部外出
	public $sgfactnum_4;    //士官实在人数
	public $sgshouldnum_4;  //士官应该人数
	public $sgholiday_4;    //士官休假
	public $sgout_4; 		//士官外出
	public $ywbfactnum_4;   //义务兵实在人数
	public $ywbshouldnum_4; //义务兵应在人数
	public $ywbholiday_4;   //义务兵休假
	public $ywbout_4;       //义务兵外出
	public $remark_4;       //备注
	
	public $dutyhead_5;  	// 值班首长
	public $dutyer_5;       // 值班员
	public $factnum_5;      // 总数实到人数
	public $shouldnum_5;    //总数应到人数
	public $gbfactnum_5; 	//干部实到人数
	public $gbshouldnum_5;  //干部应到人数
	public $gbholiday_5;    //干部休假
	public $gbout_5;        // 干部外出
	public $sgfactnum_5;    //士官实在人数
	public $sgshouldnum_5;  //士官应该人数
	public $sgholiday_5;    //士官休假
	public $sgout_5; 		//士官外出
	public $ywbfactnum_5;   //义务兵实在人数
	public $ywbshouldnum_5; //义务兵应在人数
	public $ywbholiday_5;   //义务兵休假
	public $ywbout_5;       //义务兵外出
	public $remark_5;       //备注
	
	public $dutyhead_jql;  	// 值班首长
	public $dutyer_jql;       // 值班员
	public $factnum_jql;      // 总数实到人数
	public $shouldnum_jql;    //总数应到人数
	public $gbfactnum_jql; 	//干部实到人数
	public $gbshouldnum_jql;  //干部应到人数
	public $gbholiday_jql;    //干部休假
	public $gbout_jql;        // 干部外出
	public $sgfactnum_jql;    //士官实在人数
	public $sgshouldnum_jql;  //士官应该人数
	public $sgholiday_jql;    //士官休假
	public $sgout_jql; 		//士官外出
	public $ywbfactnum_jql;   //义务兵实在人数
	public $ywbshouldnum_jql; //义务兵应在人数
	public $ywbholiday_jql;   //义务兵休假
	public $ywbout_jql;       //义务兵外出
	public $remark_jql;       //备注
	
	public $dutyhead_jdd;  	// 值班首长
	public $dutyer_jdd;       // 值班员
	public $factnum_jdd;      // 总数实到人数
	public $shouldnum_jdd;    //总数应到人数
	public $gbfactnum_jdd; 	//干部实到人数
	public $gbshouldnum_jdd;  //干部应到人数
	public $gbholiday_jdd;    //干部休假
	public $gbout_jdd;        // 干部外出
	public $sgfactnum_jdd;    //士官实在人数
	public $sgshouldnum_jdd;  //士官应该人数
	public $sgholiday_jdd;    //士官休假
	public $sgout_jdd; 		//士官外出
	public $ywbfactnum_jdd;   //义务兵实在人数
	public $ywbshouldnum_jdd; //义务兵应在人数
	public $ywbholiday_jdd;   //义务兵休假
	public $ywbout_jdd;       //义务兵外出
	public $remark_jdd;       //备注
	
	public $zzContent;    // 总站内容
	public $zzremark;    // 总站备注
	public $Content1;    // 1内容
	public $remark1;    // 1备注
	public $Content2;    // 2内容
	public $remark2;    // 2备注
	public $Content3;    // 3内容
	public $remark3;    // 3备注
	public $Content4;    // 4内容
	public $remark4;    // 4备注
	public $Content5;    // 5内容
	public $remark5;    // 5备注
	public $Contentjdd;    // 教导队内容
	public $remarkjdd;    // 教导队备注
	public $Contentjql;    // 警勤连内容
	public $remarkjql;    // 警勤连备注
	
	
	public $vehiclepleasenum; // 请示台次
	public $vehicleusednum; 	// 动用台次
	public $safesituation;		// 部队安全情况


}