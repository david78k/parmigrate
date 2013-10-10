%warning("off", "Octave:future-time-stamp");

data = "test.mat"
%A = load (data) 

prefix = "rand-6-r2"
%data = strcat(prefix, ".controller");
data = strcat(prefix, ".dstat");
%output = strcat(prefix, ".vwnd");

A = load (data);
%A = load ('lf-0-r1.vwnd', 'ascii')

%vwnds = A(:,1)

figure;
%gplot rand (100,1) with linespoints
%x = -10:0.1:10;
%plot (x, sin (x));
%plot(A(:,:))
%plot(A(:,[1]));
%plot(A(:,[1, 5]));
%plot(A(:,1:5))
%plot(RTTs, Ns)
%xlabel('ITERATION');
%ylabel('VM WINDOW');
%legend('VM WINDOW', 'THRESHOLD');

%image = "lf-0-r1";
%print -deps $image.eps
%saveas (1, strcat(output, ".png"));
%saveas (1, strcat(output, ".eps"));
%saveas (1, strcat(output, ".emf"));

figure;
output = data
%output = strcat(prefix, ".bw");
x = 1:1:length(A);
plot(x, A(:,1)/1000000, x, A(:,2)/1000000, '-.*');
%plot(x, A(:,2)/1000000, x, A(:,3)/1000000, '-.*');
%plot(A(:,2:3)/1000000);
%xlabel('ITERATION');
xlabel('TIME (SEC)');
ylabel('THROUGHPUT (MB/s)');
legend('RECEIVE', 'SEND');
%legend('AGGREGATE', 'PER VM');

saveas (1, strcat(output, ".png"));
saveas (1, strcat(output, ".eps"));
saveas (1, strcat(output, ".emf"));
