%warning("off", "Octave:future-time-stamp");

data = "test.mat"
%A = load (data) 

prefix = "lf-0-r1"
data = strcat(prefix, ".vwnd");

A = load (data);
%A = load ('lf-0-r1.vwnd', 'ascii')

%vwnds = A(:,1)

figure
%gplot rand (100,1) with linespoints
x = -10:0.1:10;
%plot (x, sin (x));
%plot(A(:,:))
plot(A(:,1:2))
%plot(vwnds)
%plot(RTTs, Ns)
%xlabel('time')
%ylabel('N')

%image = "lf-0-r1";
%print -deps $image.eps
saveas (1, strcat(prefix, ".png"));
%saveas (1, "power-law.eps");
%saveas (1, "power-law.emf");

%data = strcat(prefix, ".cvms");
%A = load (data);
