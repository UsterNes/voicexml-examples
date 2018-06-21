<?php
header('Content-Type: text/plain; charset=us-ascii');
$ln = $_REQUEST['ln'];
switch($ln) {
	case 1:
		include('../inc/italiano.inc');
		break;
	case 2:
		include('../inc/inglese.inc');
		break;
	case 3:
		include('../inc/tedesco.inc');
		break;
	case 4:
		include('../inc/spagnolo.inc');
		break;
	case 5:
		include('../inc/francese.inc');
		break;
}
$output = "#ABNF 1.0 iso-8859-1;
mode voice;
language $config[etc];
tag-format <semantics/1.0>;\n";

$output.= 'root $data;
public $data = {out=""} ( $giorno {out += rules.giorno} )( $mese {out += rules.mese} )( $anno {out += rules.anno} )<1->;
$giorno = 01 | 02 | 03 |04 |05 |06 |07 |08 |09 |1 | 2 | 3 |4 |5 |6 |7 |8 |9 | 10 | 11 | 12 | 13 |14 |15 |16 |17 |18 |19 |20| 21 | 22 | 23 | 24 |25 |26 |27 |28 |29 |30|31;
$mese = $gennaio | $febbraio  | $marzo | $aprile | $maggio |$giugno | $luglio | $agosto | $settembre | $ottobre | $novembre | $dicembre;
$anno = 1920 | 1921| 1922 | 1923| 1924 | 1925| 1926 | 1927| 1928 | 1929|1930 | 1931| 1932 | 1933| 1934 | 1935| 1936 | 1937| 1938 | 1939|1940 | 1941| 1942 | 1943| 1944 | 1945| 1946 | 1947| 1948 | 1949|1950 | 1951| 1952 | 1953| 1954 | 1955| 1956 | 1957| 1958 | 1959|1960 | 1961| 1962 | 1963| 1964 | 1965| 1966 | 1967| 1968 | 1969|1970 | 1971| 1972 | 1973| 1974 | 1975| 1976 | 1977| 1978 | 1979|1980 | 1981| 1982 | 1983| 1984 | 1985| 1986 | 1987| 1988 | 1989| 1990 | 1991| 1992 | 1993|1994|1995| 1996 | 1997| 1998 | 1999|2000 | 2001| 2002 | 2003| 2004 | 2005| 2006 | 2007| 2008 | 2009|2010 | 2011| 2012 | 2013| 2014 | 2015| 2016 | 2017| 2018 | 2019| 2020 | 2021; 

$gennaio = '.$config['gennaio'].' { out= "-01-" ; }   |  01  {out="-01-"; } | 1 {out="-01-"; };
$febbraio = '.$config['febbraio'].' { out= "-02-" ; }   |  02  {out="-02-"; } | 2 {out="-02-"; };
$marzo =  '.$config['marzo'].' { out= "-03-" ; }   |  03  {out="-03-"; } | 3 {out="-03-"; };
$aprile = '.$config['aprile'].' { out= "-04-" ; }   |  04  {out="-04-"; } | 4 {out="-04-"; };
$maggio = '.$config['maggio'].' { out= "-05-" ; }   |  05  {out="-05-"; } | 5 {out="-05-"; };
$giugno = '.$config['giugno'].' { out= "-06-" ; }   |  06  {out="-06-"; } | 6 {out="-06-"; };
$luglio = '.$config['luglio'].' { out= "-07-" ; }   |  07  {out="-07-"; } | 7 {out="-07-"; };
$agosto = '.$config['agosto'].' { out= "-08-" ; }   |  08  {out="-08-"; } | 8 {out="-08-"; };
$settembre = '.$config['settembre'].' { out= "-09-" ; }   |  09  {out="-09-"; } | 9 {out="-09-"; };
$ottobre = '.$config['ottobre'].' { out= "-10-" ; }   |  10  {out="-10-"; } ;
$novembre = '.$config['novembre'].' { out= "-11-" ; }   |  11  {out="-11-"; } ;
$dicembre = '.$config['dicembre'].' { out= "-12-" ; }  |  12 {out="-12-"; };
$digit = 1 | 2 | 3 |4 |5 |6 |7 |8 |9 |0 ;';
echo mb_convert_encoding( $output, 'US-ASCII', 'UTF-8');
?>