data = "sf.dat"
figure = "sf.emf"

set palette gray

set terminal emf enhanced solid font 30
#set terminal png
#set terminal postscript eps enhanced solid color
#set terminal hp500c 300 tiff
set output figure 
set   autoscale                        # scale axes automatically

unset log                              # remove any log-scaling
unset label                            # remove any previous labels
set xtic auto                          # set xtics automatically
set ytic auto                          # set ytics automatically

#set xtic rotate by -45 scale 0

set tmargin 1;
#set multiplot;
#set size 1,0.7;
#set size 1,1;
#set origin 0.0,0.5;

# first plot
#set title "evacuation"
set xlabel "time (sec)"
set ylabel "number of evacuated VMs"
#set y2label "evacuation ratio"
#set y2label "individual migration time (sec)"
#set y2tic auto
set ytics nomirror
#set y2tics
set tics out
set autoscale y
#set autoscale y2;
#set key title "migration speed 40MB/s"
#set key 20,1900
#set key left
set key right bottom
#set key right center
#set label "Yield Point" at 0.003,260
#set arrow from 0.0028,250 to 0.003,280
#set xr [0.0:(./genscriptpar+1).022]
set yr [0:]
#set y2r [0:1]

#set xdata time
#set timefmt "%H:%M:%S"

#data using 6:($0+1) title '8VMs' with linespoints, \

#plot data using 1:($0+1) title 'controller' with linespoints, \

plot data using 1:($0+1) title 'IC' with linespoints lc rgb "black", \
data using 2:($0+1) title 'AC' with linespoints lc rgb "black", \
data using 3:($0+1) title '1VM' with linespoints lc rgb "black", \
data using 4:($0+1) title '5VMs' with linespoints lc rgb "black", \
data using 5:($0+1) title '10VMs' with linespoints lc rgb "black", \
data using 6:($0+1) title '30VMs' with linespoints lc rgb "black"

#plot data using 1:($0+1) title 'AC' with linespoints, \
#data using 2:($0+1) title '1VM' with linespoints, \
#data using 3:($0+1) title '5VMs' with linespoints, \
#data using 4:($0+1) title '10VMs' with linespoints, \
#data using 5:($0+1) title '30VMs' with linespoints

#plot data using ($0):xtic(1) notitle with linespoints

# second plot
#unset multiplot;

