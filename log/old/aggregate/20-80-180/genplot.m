%warning("off", "Octave:future-time-stamp");

data = "test.mat"
%A = load (data) 

prefix = "lf-0-r1"
data = strcat(prefix, ".controller");
output = strcat(prefix, ".vwnd");

A = load (data);
%A = load ('lf-0-r1.vwnd', 'ascii')

%vwnds = A(:,1)

figure;
%gplot rand (100,1) with linespoints
x = -10:0.1:10;
%plot (x, sin (x));
%plot(A(:,:))
plot(A(:,[1, 5]));
%plot(A(:,1:5))
%plot(RTTs, Ns)
xlabel('ITERATION');
ylabel('VM WINDOW');
legend('VM WINDOW', 'THRESHOLD');

%image = "lf-0-r1";
%print -deps $image.eps
saveas (1, strcat(output, ".png"));
%saveas (1, "power-law.eps");
%saveas (1, "power-law.emf");

figure;
output = strcat(prefix, ".bw");
plot(A(:,2:3)/1000000);
xlabel('ITERATION');
ylabel('THROUGHPUT (MB/s)');
saveas (1, strcat(output, ".png"));
legend('TOTAL', 'INDIVIDUAL');
