library(ggplot2)

require(devEMF)
emf('2ms.emf')

#png("2ms.emf")
#postscript("plot.eps")
#emf("plot.emf")

# header = TRUE ignores the first line, check.names = FALSE allows '+' in 'C++'
benchmark <- read.table("2ms.dat", header = TRUE, row.names = "vwnd", check.names = FALSE)

# 't()' is matrix tranposition, 'beside = TRUE' separates the benchmarks, 'heat' provides nice colors
#barplot(t(as.matrix(benchmark)), beside = TRUE, col = heat.colors(2))
barplot(t(as.matrix(benchmark)), beside = TRUE, col = heat.colors(2), xlab = "VM WINDOW", ylab = "MIGARTION TIME (SEC)")

# 'cex' stands for 'character expansion', 'bty' for 'box type' (we don't want borders)
legend("topright", names(benchmark), cex = 0.9, bty = "n", fill = heat.colors(2))

