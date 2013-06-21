#!/usr/bin/perl

#####                         #####
#                                 #
#   Written by Dave Smith-Hayes   #
#   For use on ds-h.me/essays.    #
#                                 #
#####                         #####

#strict wont let me execute.
use warnings;

# THIS IS THE DATE FUNCTION
($second, $minute, $hour, $dom, $mon, $year, $dow, $doy, $dls) = localtime();

# year offset.
$year += 1900;

# filesname string.
my $fileName = $dom."-".$mon."-".$year."-".$hour.":".$minute.":".$second.".md";

# THIS CALLS VIM TO CREATE A NEW FILE WITH THE DATE
exec("vim .raw/".$fileName);
