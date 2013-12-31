<?php
/*
$names = hAttribute::where(function($query){
    $query->where('version','=', Base_Controller::getVersionDate());
    })->group_by('stat_id')->get(array('stat_id','display_name'));

$stat_names = array();
foreach($names as $name) {
    $stat_names[$name->stat_id] = $name->display_name;
}
ksort($stat_names);
echo serialize($stat_names);
*/
$stat_name_list = 'a:393:{i:5;s:19:"Jet Energy Recharge";i:6;s:6:"Health";i:7;s:12:"Health Regen";i:12;s:9:"Run Speed";i:13;s:18:"Sprint Energy Cost";i:17;s:12:"Rate of Fire";i:23;s:18:"Charge-up Duration";i:29;s:20:"Weapon Splash Radius";i:35;s:6:"Energy";i:36;s:21:"Energy Recharge Delay";i:37;s:11:"Jump Height";i:38;s:6:"Damage";i:39;s:13:"Effect Radius";i:40;s:8:"Recharge";i:41;s:8:"Strength";i:43;s:8:"Recharge";i:44;s:6:"Damage";i:46;s:8:"Recharge";i:47;s:8:"Duration";i:48;s:8:"Strength";i:49;s:8:"Recharge";i:50;s:24:"Jet Energy Cost - Tier 1";i:51;s:6:"Damage";i:54;s:24:"Jet Energy Cost - Tier 2";i:109;s:8:"Duration";i:110;s:12:"Revive Bonus";i:111;s:8:"Recharge";i:112;s:8:"Duration";i:113;s:6:"Damage";i:114;s:8:"Recharge";i:115;s:7:"Healing";i:116;s:22:"Healing Wave Knockback";i:117;s:8:"Recharge";i:118;s:7:"Healing";i:120;s:8:"Recharge";i:122;s:6:"Damage";i:123;s:8:"Recharge";i:124;s:6:"Damage";i:125;s:13:"Effect Radius";i:127;s:8:"Duration";i:129;s:8:"Recharge";i:130;s:6:"Damage";i:131;s:13:"Effect Radius";i:132;s:8:"Recharge";i:139;s:26:"Turret Mode Accuracy Bonus";i:140;s:30:"Turret Mode Rate of Fire Bonus";i:142;s:8:"Duration";i:143;s:17:"Deployable Health";i:144;s:8:"Recharge";i:145;s:13:"Effect Radius";i:146;s:24:"Repulsor Blast Knockback";i:147;s:8:"Recharge";i:149;s:8:"Duration";i:150;s:8:"Recharge";i:155;s:17:"Deployable Health";i:156;s:8:"Duration";i:157;s:8:"Recharge";i:158;s:17:"Deployable Health";i:159;s:13:"Turret Damage";i:160;s:8:"Recharge";i:176;s:6:"Damage";i:177;s:8:"Duration";i:178;s:8:"Recharge";i:179;s:19:"Jet Thrust - Tier 1";i:180;s:19:"Jet Thrust - Tier 2";i:183;s:28:"Jet Energy Recharge - Tier 1";i:184;s:28:"Jet Energy Recharge - Tier 2";i:186;s:13:"Effect Radius";i:187;s:8:"Recharge";i:189;s:8:"Recharge";i:202;s:18:"Run Speed - Tier 2";i:205;s:21:"Sprint Speed - Tier 2";i:208;s:20:"Jump Height - Tier 2";i:210;s:15:"Health - Tier 1";i:211;s:15:"Health - Tier 2";i:212;s:15:"Health - Tier 3";i:213;s:21:"Health Regen - Tier 1";i:214;s:21:"Health Regen - Tier 2";i:215;s:21:"Health Regen - Tier 3";i:216;s:16:"Defense - Tier 1";i:217;s:16:"Defense - Tier 2";i:218;s:16:"Defense - Tier 3";i:225;s:29:"Afterburner Velocity - Tier 1";i:228;s:41:"Afterburner Speed Bonus Duration - Tier 1";i:231;s:29:"Afterburner Recharge - Tier 1";i:326;s:34:"Short-Circuit Mine Damage - Tier 1";i:329;s:41:"Short-Circuit Mine Root Duration - Tier 1";i:332;s:36:"Short-Circuit Mine Recharge - Tier 1";i:384;s:26:"Bombs Away Damage - Tier 2";i:387;s:28:"Bombs Away Duration - Tier 2";i:390;s:28:"Bombs Away Recharge - Tier 2";i:411;s:36:"Heavy Armor Shield Duration - Tier 2";i:414;s:46:"Heavy Armor Damage Reduction Duration - Tier 2";i:417;s:29:"Heavy Armor Recharge - Tier 2";i:419;s:6:"Damage";i:420;s:13:"Effect Radius";i:421;s:8:"Recharge";i:449;s:8:"Duration";i:453;s:8:"Recharge";i:472;s:7:"Healing";i:476;s:5:"Range";i:480;s:8:"Recharge";i:482;s:13:"Effect Radius";i:491;s:20:"Run Speed - Dev Base";i:495;s:17:"Health - Dev Tier";i:496;s:23:"Health Regen - Dev Tier";i:497;s:18:"Defense - Dev Tier";i:570;s:32:"Healing Ball Strength - Dev Tier";i:571;s:40:"Healing Ball Projectile Speed - Dev Tier";i:572;s:32:"Healing Ball Recharge - Dev Tier";i:573;s:37:"Healing Ball Splash Radius - Dev Tier";i:598;s:37:"Reload Speed - Assault Rifle - Tier 3";i:622;s:33:"Accuracy - Assault Rifle - Tier 3";i:643;s:37:"Rate of Fire - Assault Rifle - Tier 3";i:701;s:6:"Damage";i:703;s:8:"Recharge";i:735;s:31:"Gravity Field Duration - Tier 2";i:738;s:31:"Gravity Field Recharge - Tier 2";i:743;s:8:"Duration";i:744;s:8:"Recharge";i:745;s:13:"Effect Radius";i:746;s:12:"Damage Boost";i:754;s:26:"Jump Pad Duration - Tier 2";i:757;s:26:"Jump Pad Recharge - Tier 2";i:760;s:26:"Jump Pad Strength - Tier 2";i:797;s:8:"Recharge";i:798;s:13:"Effect Radius";i:808;s:8:"Recharge";i:811;s:35:"Explosive Bullets Duration - Tier 2";i:816;s:28:"Dread Plating Regen - Tier 1";i:817;s:28:"Dread Plating Regen - Tier 2";i:819;s:30:"Dread Plating Defense - Tier 1";i:820;s:30:"Dread Plating Defense - Tier 2";i:822;s:29:"Dread Plating Health - Tier 1";i:823;s:29:"Dread Plating Health - Tier 2";i:839;s:29:"Salvo Proxy Recharge - Tier 2";i:843;s:29:"Salvo Proxy Duration - Tier 2";i:847;s:29:"Salvo Proxy Velocity - Tier 2";i:849;s:8:"Recharge";i:865;s:6:"Damage";i:881;s:13:"Effect Radius";i:885;s:7:"Healing";i:889;s:8:"Recharge";i:893;s:25:"Evacuate Impulse Strength";i:894;s:6:"Damage";i:895;s:8:"Recharge";i:906;s:17:"Damage Multiplier";i:910;s:8:"Recharge";i:919;s:34:"Explosive Rounds Recharge - Tier 2";i:921;s:13:"Effect Radius";i:923;s:32:"Explosive Rounds Radius - Tier 2";i:925;s:8:"Recharge";i:927;s:6:"Damage";i:937;s:13:"Heal strength";i:939;s:19:"Deployable Duration";i:954;s:16:"Damage Per Round";i:956;s:9:"Clip Size";i:957;s:5:"Range";i:958;s:13:"Weapon Spread";i:959;s:12:"Charge Speed";i:960;s:5:"Range";i:961;s:13:"Effect Radius";i:962;s:9:"Item Heal";i:963;s:6:"Damage";i:964;s:13:"Effect Radius";i:965;s:5:"Range";i:966;s:8:"Recharge";i:967;s:6:"Damage";i:968;s:15:"Damage Duration";i:969;s:5:"Range";i:970;s:8:"Recharge";i:971;s:6:"Damage";i:972;s:13:"Effect Radius";i:973;s:8:"Recharge";i:974;s:6:"Damage";i:976;s:13:"Effect Radius";i:977;s:6:"Damage";i:978;s:15:"Debuff Duration";i:979;s:6:"Damage";i:980;s:5:"Range";i:981;s:13:"Effect Radius";i:982;s:14:"Snare Duration";i:983;s:8:"Recharge";i:988;s:13:"Effect Radius";i:989;s:14:"Snare Duration";i:990;s:8:"Duration";i:991;s:13:"Buff Duration";i:992;s:13:"Turret Damage";i:993;s:17:"Deployable Health";i:994;s:8:"Recharge";i:995;s:17:"Deployable Health";i:996;s:8:"Recharge";i:997;s:13:"Turret Damage";i:998;s:17:"Deployable Health";i:999;s:15:"Turret Duration";i:1000;s:27:"Deployable Health Threshold";i:1001;s:13:"Effect Radius";i:1002;s:14:"Bulwark Shield";i:1003;s:8:"Recharge";i:1004;s:13:"Buff Duration";i:1005;s:11:"Max Targets";i:1006;s:8:"Recharge";i:1007;s:19:"Deployable Duration";i:1008;s:8:"Strength";i:1009;s:13:"Buff Duration";i:1011;s:6:"Damage";i:1012;s:13:"Effect Radius";i:1013;s:15:"Damage Duration";i:1014;s:6:"Damage";i:1015;s:8:"Recharge";i:1018;s:11:"Max Turrets";i:1019;s:11:"Wall Health";i:1020;s:8:"Recharge";i:1021;s:17:"Deployable Health";i:1022;s:8:"Recharge";i:1023;s:13:"Repair Amount";i:1024;s:14:"Snare Duration";i:1025;s:6:"Damage";i:1026;s:12:"Damage Boost";i:1027;s:13:"Buff Duration";i:1028;s:16:"Damage Reduction";i:1029;s:13:"Effect Radius";i:1031;s:16:"Damage Reduction";i:1032;s:12:"Bonus Damage";i:1033;s:8:"Duration";i:1034;s:6:"Damage";i:1036;s:8:"Duration";i:1038;s:16:"Health Threshold";i:1039;s:7:"Healing";i:1040;s:11:"Wall Health";i:1041;s:8:"Recharge";i:1042;s:8:"Duration";i:1043;s:16:"Damage Reduction";i:1044;s:6:"Damage";i:1045;s:13:"Effect Radius";i:1047;s:8:"Duration";i:1048;s:12:"Damage Boost";i:1049;s:13:"Effect Radius";i:1050;s:11:"Speed Bonus";i:1051;s:8:"Recharge";i:1052;s:13:"Effect Radius";i:1053;s:8:"Duration";i:1054;s:6:"Damage";i:1055;s:8:"Recharge";i:1056;s:13:"Effect Radius";i:1057;s:16:"Damage Reduction";i:1058;s:18:"Movement Reduction";i:1059;s:12:"Energy Drain";i:1060;s:12:"Damage Bonus";i:1061;s:17:"Damage Absorption";i:1062;s:8:"Duration";i:1063;s:8:"Recharge";i:1064;s:8:"Duration";i:1065;s:13:"Effect Radius";i:1066;s:8:"Duration";i:1067;s:16:"Ability Duration";i:1068;s:10:"Damage Amp";i:1069;s:6:"Damage";i:1070;s:12:"Impact Delay";i:1071;s:13:"Effect Radius";i:1072;s:7:"Healing";i:1073;s:13:"Splash Damage";i:1074;s:13:"Effect Radius";i:1075;s:8:"Recharge";i:1076;s:8:"Duration";i:1077;s:6:"Damage";i:1078;s:13:"Effect Radius";i:1079;s:8:"Recharge";i:1080;s:12:"Damage Bonus";i:1081;s:8:"Duration";i:1082;s:8:"Recharge";i:1083;s:13:"Buff Duration";i:1084;s:11:"Speed Boost";i:1085;s:19:"Deployable Duration";i:1086;s:6:"Damage";i:1087;s:13:"Effect Radius";i:1088;s:8:"Duration";i:1089;s:8:"Duration";i:1090;s:5:"Range";i:1092;s:14:"Snare Duration";i:1093;s:16:"Damage Reduction";i:1095;s:7:"Healing";i:1096;s:8:"Duration";i:1098;s:9:"Lifesteal";i:1099;s:6:"Damage";i:1100;s:11:"Max Targets";i:1101;s:11:"Max Targets";i:1102;s:6:"Damage";i:1103;s:16:"Impulse Strength";i:1104;s:8:"Recharge";i:1105;s:14:"Cloud Duration";i:1106;s:13:"Debuff Amount";i:1107;s:13:"Effect Radius";i:1108;s:17:"Deployable Health";i:1110;s:16:"Health Threshold";i:1111;s:7:"Healing";i:1112;s:13:"Effect Radius";i:1113;s:13:"Effect Radius";i:1114;s:6:"Damage";i:1116;s:6:"Damage";i:1117;s:8:"Duration";i:1118;s:13:"Effect Radius";i:1119;s:12:"Health Bonus";i:1120;s:15:"Damage Duration";i:1121;s:10:"Air Sprint";i:1122;s:6:"Damage";i:1123;s:12:"Reload Speed";i:1124;s:8:"Recharge";i:1125;s:11:"Speed Boost";i:1126;s:8:"Recharge";i:1128;s:8:"Duration";i:1131;s:8:"Duration";i:1133;s:15:"Debuff Duration";i:1134;s:8:"Duration";i:1135;s:9:"Knockback";i:1136;s:12:"Pulse Damage";i:1137;s:6:"Damage";i:1138;s:17:"Deployable Health";i:1139;s:6:"Damage";i:1140;s:8:"Recharge";i:1141;s:11:"Max Targets";i:1142;s:11:"Charge Time";i:1143;s:20:"Creature HP Modifier";i:1144;s:24:"Creature Damage Modifier";i:1145;s:31:"Creature Weapon Damage Modifier";i:1146;s:8:"Duration";i:1147;s:11:"Max Allowed";i:1148;s:8:"Recharge";i:1149;s:5:"Range";i:1150;s:6:"Damage";i:1151;s:5:"Power";i:1152;s:4:"Mass";i:1153;s:6:"Damage";i:1154;s:12:"Pulse Damage";i:1156;s:17:"Deployable Health";i:1157;s:19:"Deployable Duration";i:1158;s:8:"Recharge";i:1159;s:11:"Repair Pool";i:1160;s:19:"Fire Patch Duration";i:1161;s:21:"Rate of Fire Duration";i:1163;s:24:"Turret Mode Damage Bonus";i:1164;s:27:"Turret Mode Shield Recharge";i:1165;s:18:"Turret Mode Shield";i:1168;s:6:"Damage";i:1169;s:3:"AOE";i:1170;s:8:"Recharge";i:1171;s:18:"Movement Reduction";i:1172;s:9:"Knockback";i:1173;s:6:"Damage";i:1174;s:8:"Recharge";i:1175;s:13:"Effect Radius";i:1176;s:20:"Max Resonating Bolts";i:1180;s:8:"Strength";i:1181;s:12:"Damage Boost";i:1182;s:7:"Healing";i:1183;s:12:"EMP Duration";i:1184;s:6:"Damage";i:1185;s:16:"Energy Injection";i:1186;s:7:"Healing";i:1188;s:13:"Effect Radius";i:1189;s:6:"Damage";i:1190;s:8:"Recharge";i:1191;s:8:"Duration";i:1192;s:8:"Strength";i:1193;s:8:"Recharge";i:1194;s:19:"Activation Duration";i:1195;s:13:"Effect Radius";i:1199;s:24:"Overload Weapon Chargeup";i:1200;s:8:"Recharge";i:1202;s:8:"Recharge";i:1203;s:35:"Evasive Maneuver Rate of Fire Bonus";i:1204;s:6:"Damage";i:1206;s:22:"Particle Beam Recharge";i:1207;s:28:"Rocket Jump Impulse Strength";i:1208;s:6:"Damage";i:1209;s:8:"Recharge";i:1211;s:12:"Energy Drain";i:1212;s:11:"Air Control";i:1213;s:6:"Damage";i:1214;s:8:"Recharge";i:1215;s:15:"Debuff Duration";i:1216;s:6:"Damage";i:1218;s:8:"Duration";i:1219;s:22:"Shoulder Rocket Damage";i:1220;s:23:"Shoulder Rockets Radius";i:1221;s:8:"Recharge";i:1222;s:6:"Damage";i:1223;s:17:"Fire Patch Damage";i:1224;s:8:"Duration";i:1225;s:6:"Damage";i:1226;s:8:"Duration";i:1227;s:10:"DOT Damage";i:1228;s:15:"Energy Siphoned";}';
$stat_name_lookup = unserialize($stat_name_list);
?>
